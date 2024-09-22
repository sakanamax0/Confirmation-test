@extends('layouts.app')

@section('title', 'Login')

@section('content')
<header>
    <h1 style="text-align: center;">FashionablyLate <a href="{{ route('register') }}" style="float: right;">Register</a></h1>
    <h2>Login</h2>
</header>
<main>
    <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="email" id="email" placeholder="メールアドレスを入力してください">
        
        <label for="password">パスワード</label>
        <input type="password" id="password" placeholder="パスワードを入力してください">
        
        <button type="button">ログイン</button>
    </div>
</main>
@endsection
