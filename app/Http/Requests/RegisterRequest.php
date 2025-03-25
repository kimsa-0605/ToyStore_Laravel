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
                'fullname' => 'required|string|max:50',
                'phone' => 'nullable|regex:/^0[0-9]{9}$/',
                'avatar_link' => 'nullable|url|max:255',
                'province' => 'nullable|string|max:255',
                'district' => 'nullable|string|max:255',
                'detailed_address' => 'nullable|string|max:255',
            
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
        ];
    }
}
