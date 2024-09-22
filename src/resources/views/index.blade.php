@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <header>
        <h1 style="text-align: center;">FashionablyLate</h1>
        <h2 style="text-align: center;">Register</h2>
    </header>

    <main>
        <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" id="name" placeholder="名前を入力してください">

            <label for="email">メールアドレス</label>
            <input type="email" id="email" placeholder="メールアドレスを入力してください">

            <label for="password">パスワード</label>
            <input type="password" id="password" placeholder="パスワードを入力してください">

            <button type="button">登録</button>
        </div>
    </main>
@endsection
