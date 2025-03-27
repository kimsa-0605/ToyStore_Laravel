<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:50',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email cannot be empty.',
            'email.email' => 'Invalid email format.',
            'password.required' => 'Password cannot be empty.',
            'password.min' => 'Password must be at least 6 characters.',
        ];
    }
}
