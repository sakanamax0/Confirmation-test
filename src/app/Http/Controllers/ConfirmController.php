<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ConfirmController extends Controller
{
    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();

        // inquiry_typeのラベル変換
        $inquiryTypeLabels = [
            'delivery' => '商品のお届けについて',
            'exchange' => '商品の交換について',
            'trouble' => '商品トラブル',
            'shop' => 'ショップへのお問い合わせ',
            'other' => 'その他'
        ];
        
        $inputs['inquiry_type_label'] = $inquiryTypeLabels[$inputs['inquiry_type']] ?? '不明';

        return view('confirm', ['inputs' => $inputs]);
    }

    public function submit(Request $request)
    {
        $validated = session('validated');

        if (!$validated) {
            return redirect()->route('contact.form')->withErrors(['message' => '無効なリクエストです。']);
        }

        // データベースに保存
        Contact::create($validated);

        // サンクスページへリダイレクト
        return redirect()->route('thankyou');
    }
}
