@extends('layouts.app')

@section('title', 'Contact Form')

@section('content')
    <h1 class="text-center">FashionablyLate</h1>
    <h2 class="text-center">お問い合わせ</h2>

    <form action="{{ route('contact.confirm') }}" method="POST">
        @csrf
        <div>
            <label for="last_name">姓:</label>
            <input type="text" name="last_name" id="last_name" required>
        </div>
        <div>
            <label for="first_name">名:</label>
            <input type="text" name="first_name" id="first_name" required>
        </div>
        <div>
            <label for="gender">性別:</label>
            <select name="gender" id="gender" required>
                <option value="male">男性</option>
                <option value="female">女性</option>
                <option value="other">その他</option>
            </select>
        </div>
        <div>
            <label for="email">メールアドレス:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="phone">電話番号:</label>
            <input type="text" name="phone" id="phone" required>
        </div>
        <div>
            <label for="address">住所:</label>
            <input type="text" name="address" id="address" required>
        </div>
        <div>
            <label for="building">建物名:</label>
            <input type="text" name="building" id="building">
        </div>
        <div>
            <label for="inquiry_type">お問い合わせの種類:</label>
            <select name="inquiry_type" id="inquiry_type" required>
                <option value="general">一般</option>
                <option value="support">サポート</option>
                <!-- 他の選択肢も追加できます -->
            </select>
        </div>
        <div>
            <label for="inquiry_content">お問い合わせ内容:</label>
            <textarea name="inquiry_content" id="inquiry_content" maxlength="120" required></textarea>
        </div>
        <button type="submit">確認</button>
    </form>
@endsection
