<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <header>
        <h1 style="text-align: center;">FashionablyLate <a href="{{ route('login') }}" style="float: right;">Login</a></h1>
        <h2>Register</h2>
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
</body>
</html>
