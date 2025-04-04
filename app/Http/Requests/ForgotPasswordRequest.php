<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->has('email') && !$this->has('otp') && !$this->has('password')) {
            return [
                'email' => 'required|email|max:255',
            ];
        }
        if ($this->has('email') && $this->has('otp') && !$this->has('password')) {
            return [
                'email' => 'required|email|max:255',
                'otp' => 'required|string|size:6',
            ];
        }
        if ($this->has('email') && $this->has('otp') && $this->has('password')) {
            return [
                'email' => 'required|email|max:255',
                'otp' => 'required|string|size:6',
                'password' => 'required|string|min:6|max:50',
            ];
        }
        return []; 
    }

    public function messages()
    {
        return [
            'email.required' => 'Please enter your email.',
            'email.email' => 'Invalid email format.',
            'email.max' => 'Email cannot exceed 255 characters.',

            'otp.required' => 'Please enter the OTP.',
            'otp.size' => 'OTP must be exactly 6 characters.',

            'password.required' => 'Please enter a new password.',
            'password.min' => 'Password must be at least 6 characters long.',
            'password.max' => 'Password cannot exceed 50 characters.',
        ];
    }
}
