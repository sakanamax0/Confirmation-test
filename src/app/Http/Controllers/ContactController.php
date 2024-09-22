<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function handleContactForm(ContactRequest $request)
{
    // 確認画面へリダイレクト
    return redirect()->route('contact.confirm')->with('validated', $request->validated());
}


    public function submit(Request $request)
    {
        // セッションからデータを取得
        $validated = session('validated');

        // データが存在しない場合の処理
        if (!$validated) {
            return redirect()->route('contact.form')->withErrors(['message' => '無効なリクエストです。']);
        }

        // データベースに保存
        $contact = Contact::create($validated);

        // サンクスページへリダイレクト
        return redirect()->route('thankyou');
    }
    public function confirm(Request $request)
{
    $validated = session('validated');

    if (!$validated) {
        return redirect()->route('contact.form')->withErrors(['message' => '無効なリクエストです。']);
    }

    return view('contact.confirm', compact('validated'));
}

}
