<?php

namespace App\Http\Api;

use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use App\Services\EmailServices\OtpMail;
use Illuminate\Http\Request;

class UserController
{
    public function sendOTPcode(ForgotPasswordRequest $request)
    {
        $email = $request->get('email');
        $user = User::where("email", $email)->first();
        if (!$user) {
            return response()->json(['isSent'=>false,'message' => 'This email is not registered!!'], 404);
        }
        $otp = str_pad(random_int(100000, 999999), 6, '0', STR_PAD_LEFT);
        Mail::to($user->email)->send(new OtpMail($user, $otp));
        $otpData = [
            'code' => $otp, 
            'created_at' => now(), 
        ];
        Cache::put('otp_' . $user->email, $otpData, now()->addSeconds(60));
        return response()->json(['isSent'=>true,'message' => 'OTP has been sent to your email.']);
    }

    public function verifyOTP(ForgotPasswordRequest $request)
    {
        $email = $request->get('email');
        $otpCode = $request->get('otp');
        $storedOtpData = Cache::get('otp_' . $email);
        if (!$storedOtpData ||!is_array($storedOtpData) ||!isset($storedOtpData['code'], $storedOtpData['created_at'])) {
            return response()->json([
                'isCorrect' => false,
                'message' => 'OTP has expired or is invalid. Please request a new one.'
            ], 400);
        }
        if ($otpCode !== $storedOtpData['code']) {
            return response()->json([
                'isCorrect' => false,
                'message' => 'Invalid OTP. Please try again.'
            ], 400);
        }
        $createdAt = \Carbon\Carbon::parse($storedOtpData['created_at']);
        if (now()->diffInSeconds($createdAt) > 60) {
            return response()->json([
                'isCorrect' => false,
                'message' => 'OTP expired. Please request a new one.'
            ], 400);
        }
        Cache::forget('otp_' . $email);
        Cache::put('email_repassword', $email, now()->addMinutes(10));
        return response()->json([
            'isCorrect' => true,
            'message' => 'OTP verification successful. You can now reset your password.'
        ]);
    }
    public function resetPassword(ForgotPasswordRequest $request)
    {
        $email = Cache::get('email_repassword'); 
        $newPassword = $request->input('password');
        if (!$email) {
            return response()->json([
                'isSuccess' => false,
                'message' => 'Session expired. Please verify OTP again.'
            ], 400);
        }
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['isSuccess' => false,'message' => 'User not found.'], 404);
        }
        $user->password = bcrypt($newPassword); 
        $user->save();
        Cache::forget('email_repassword');
        return response()->json([
            'isSuccess' => true,
            'message' => 'Password reset successful. Please log in with your new password.'
        ]);
    }
     
}
