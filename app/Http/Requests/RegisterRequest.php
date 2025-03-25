<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|min:6|max:50',
                'fullname' => 'required|string|min:3|max:50',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email cannot be empty.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email already exists.',
            'password.required' => 'Password cannot be empty.',
            'password.min' => 'Password must be at least 6 characters.',
            'fullname.min' => 'Full name must be at least 3 characters.',

        ];
    }
}
