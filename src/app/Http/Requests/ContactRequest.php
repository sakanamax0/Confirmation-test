<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required|string|digits_between:10,11', // ここを変更
            'address' => 'required|string',
            'building' => 'nullable|string',
            'inquiry_type' => 'required|string',
            'inquiry_content' => 'required|string|max:120', // inquiry_contentは必須に変更
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '姓を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'email.unique' => 'このメールアドレスはすでに使用されています。',
            'phone.required' => '電話番号を入力してください',
            'phone.digits_between' => '電話番号は10桁または11桁の数字で入力してください', // エラーメッセージを追加
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'inquiry_content.required' => 'お問い合わせ内容を入力してください',
            'inquiry_content.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
