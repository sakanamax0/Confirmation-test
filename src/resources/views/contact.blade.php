@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h2>Contact</h2>
    <form action="{{ route('contact.confirm') }}" method="POST">
    @csrf
        
        <div class="form-group">
            <label for="last_name">姓 <span style="color:red;">※</span></label>
            <input type="text" id="last_name" name="last_name" required>
            @error('last_name')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="first_name">名 <span style="color:red;">※</span></label>
            <input type="text" id="first_name" name="first_name" required>
            @error('first_name')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gender">性別 <span style="color:red;">※</span></label>
            <select id="gender" name="gender" required>
                <option value="male" selected>男性</option>
                <option value="female">女性</option>
                <option value="other">その他</option>
            </select>
            @error('gender')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">メールアドレス <span style="color:red;">※</span></label>
            <input type="email" id="email" name="email" required>
            @error('email')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">電話番号 <span style="color:red;">※</span></label>
            <input type="text" id="phone" name="phone" placeholder="例: 090-1234-5678" required>
            @error('phone')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">住所 <span style="color:red;">※</span></label>
            <input type="text" id="address" name="address" required>
            @error('address')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="building">建物名</label>
            <input type="text" id="building" name="building">
        </div>

        <div class="form-group">
            <label for="inquiry_type">お問い合わせの種類 <span style="color:red;">※</span></label>
            <select id="inquiry_type" name="inquiry_type" required>
                <option value="" disabled selected>選択してください</option>
                <option value="delivery">商品のお届けについて</option>
                <option value="exchange">商品の交換について</option>
                <option value="trouble">商品トラブル</option>
                <option value="shop">ショップへのお問い合わせ</option>
                <option value="other">その他</option>
            </select>
            @error('inquiry_type')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="inquiry_content">お問い合わせ内容 <span style="color:red;">※</span></label>
            <textarea id="inquiry_content" name="inquiry_content" rows="4" required></textarea>
            @error('inquiry_content')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">確認画面</button>
</form>
@endsection
