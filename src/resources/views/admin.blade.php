@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<h2>Admin</h2>
<div class="form-group">
    <input type="text" placeholder="名前やメールアドレスを入力してください">
    <select>
        <option value="">性別</option>
        <option value="male">男</option>
        <option value="female">女</option>
        <option value="other">その他</option>
    </select>
    <select>
        <option value="">問い合わせの種類</option>
        <!-- 追加のオプションをここに -->
    </select>
    <input type="date" placeholder="年/月/日">
    <button type="button">検索</button>
    <button type="button">リセット</button>
</div>
<div class="actions">
    <button type="button">エクスポート</button>
    <div class="routing-info">ルーディング情報</div>
</div>
<table>
    <thead>
        <tr>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>お問い合わせの種類</th>
            <th>詳細</th>
        </tr>
    </thead>
    <tbody>
        <!-- 結果データをここに表示 -->
    </tbody>
</table>
@endsection
