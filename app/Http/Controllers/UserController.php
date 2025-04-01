<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Services\EmailServices\SignUpMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function getSignUpForm() {
        return view('pages.signUp');
    }
    public function signUp(SignUpRequest $request) {
        $email = $request->get('email'); 
        $password = $request->get('password');
        $confirm_password = $request->get('confirmPassword');
        $fullname = $request->get('fullname');
        if ($password !== $confirm_password) {
            return redirect()->back()->with('message', 'Confirm password does not match the password.');
        }
        $userExists = User::where('email', $email)->exists();
        if ($userExists) {
            return redirect()->back()->with('message', 'Registration unsuccessful! Email already exists.');
        }
        $user = User::create([
            'email' => $email,
            'fullname' => $fullname,
            'password' => bcrypt($password)
        ]);
        if ($user) {
            Mail::to(users: $user->email)->send(new SignUpMail($user));
            return redirect('/login')->with('success', 'Account created successfully! Please check your email.');
        } 
        return redirect()->back()->with('message', 'Registration unsuccessful!.');
    }
    public function login(LoginRequest $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->back()->with('messageEmail', 'Incorrect email.');
        }        
        if (!password_verify($password, $user->password)) {
            return redirect()->back()->with('messagePassword', 'Incorrect password.');
        }
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            Session::put('user', [
                'id' => $user->id,
                'fullname' => $user->fullname,
                'email' => $user->email,
                'phone' => $user->phone,
                'avatar_link' => $user->avatar_link,
                'province' => $user->province,
                'district' => $user->district,
                'detail_address' => $user->detail_address,
            ]);
            Session::save();
            return redirect('/')->with('success', 'Login successful!');
        }
        return redirect()->back()->with('message', 'Incorrect email or password');
    }
    public function getLoginForm() {
        return view('pages.login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
    public function showFogotPassword(){
        return view('sendEmail.fogotPassword');
    }
    public function sendOtp(Request $request){
        $request->validate(['email'=> 'required|email']);
        $use = User::where('email', $request->email)->first();
        if (!$use){
            return back()->withErrors(['email'=>'Email does not exist']);
        }
        $otp = rand(100000, 999999);
        session ([
            'otp' => $otp,
            'otp_exprity' =>Carbon::now()->addSeconds(30),
            'email' =>$request->email,
        ]);
        Mail::raw("OTP code of you is: $otp", function($message) use ( $request){
            $message->to($request->email)->subject('otp reset password');
        });
        return redirect()->route('verify.otp.form')->with('success','OTP code has been sent. Please check your email!');
    }
    public function verifyOTP(Request $request) {
        $request->validate(['otp' => 'required']);
        $otp = session('otp');
        $otp_expiry = session('otp_expiry');
    
        if (!$otp || Carbon::now()->greaterThan($otp_expiry)) {
            return back()->withErrors(['otp' => 'OTP has expired! Please request a new one.']);
        }
    
        if ($request->otp != $otp) {
            return back()->withErrors(['otp' => 'Invalid OTP! Please try again.']);
        }
    
        session()->forget(['otp', 'otp_expiry']);
    
        return redirect()->route('reset.password.form')->with('success', 'OTP is valid. You can now reset your password.');
    }
    
    public function resetPassword(Request $request) {
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);
    
        $email = session('email');
        $user = User::where('email', $email)->first();
    
        if (!$user) {
            return back()->withErrors(['email' => 'Account not found.']);
        }
    
        $user->password = Hash::make($request->password);
        $user->save();
        session()->forget('email');
    
        return redirect()->route('login')->with('success', 'Password has been successfully reset. Please log in!');
    }
    
}
