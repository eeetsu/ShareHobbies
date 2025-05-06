<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:20',
            'mail_address' => 'required|email|unique:users,mail_address|max:100',
            'password' => 'required|string|confirmed|min:8|max:30',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'ユーザー名は必須です。',
            'mail_address.required' => 'メールアドレスは必須です。',
            'mail_address.email' => 'メールアドレスが不正です。',
            'password.required' => 'パスワードは必須です。',
            'password.confirmed' => 'パスワードが一致しません。',
            'password.min' => 'パスワードは8文字以上で入力してください。',
            'mail_address.unique' => 'このメールアドレスは既に使用されています。',
        ];
    }
}
