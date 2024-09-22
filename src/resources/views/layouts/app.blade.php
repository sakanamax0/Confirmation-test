<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header>
        <h1 style="text-align: center;">FashionablyLate</h1>
        <!-- ログインリンクを追加 -->
        <nav>
            <ul style="list-style-type: none; padding: 0; margin: 0; text-align: right;">
                <li style="display: inline;">
                    <a href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
