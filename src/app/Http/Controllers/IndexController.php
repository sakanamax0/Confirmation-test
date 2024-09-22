<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    public function handleForm(Request $request)
    {
        // フォーム処理ロジック
        return redirect()->route('login');
    }
}
