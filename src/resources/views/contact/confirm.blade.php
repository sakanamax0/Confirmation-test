@extends('layouts.app')

@section('title', 'Confirm')

@section('content')
    <h1 class="text-center">FashionablyLate</h1>
    <h2 class="text-center">Confirm</h2>

    <div>
        <label>お名前:</label> {{ $inputs['last_name'] ?? '' }} {{ $inputs['first_name'] ?? '' }}<br>
    </div>
    <div>
        <label>性別:</label> 
        @if($inputs['gender'] == 'male') 男性
        @elseif($inputs['gender'] == 'female') 女性
        @else その他
        @endif
        <br>
    </div>
    <div>
        <label>メールアドレス:</label> {{ $inputs['email'] ?? '' }}<br>
    </div>
    <div>
        <label>電話番号:</label> {{ $inputs['phone'] ?? '' }}<br>
    </div>
    <div>
        <label>住所:</label> {{ $inputs['address'] ?? '' }}<br>
    </div>
    <div>
        <label>建物名:</label> {{ $inputs['building'] ?? '' }}<br>
    </div>
    <div>
        <label>お問い合わせの種類:</label> {{ $inputs['inquiry_type_label'] ?? '' }}<br> <!-- inquiry_type_labelを表示 -->
    </div>
    <div>
        <label>お問い合わせ内容:</label> {{ $inputs['inquiry_content'] ?? '' }}<br>
    </div>

    <div class="text-center">
        <button type="submit" form="submitForm">送信</button>
        <a href="{{ route('contact.form') }}">修正</a>
    </div>

    <form id="submitForm" action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <input type="hidden" name="last_name" value="{{ $inputs['last_name'] }}">
        <input type="hidden" name="first_name" value="{{ $inputs['first_name'] }}">
        <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
        <input type="hidden" name="phone" value="{{ $inputs['phone'] }}">
        <input type="hidden" name="address" value="{{ $inputs['address'] }}">
        <input type="hidden" name="building" value="{{ $inputs['building'] }}">
        <input type="hidden" name="inquiry_type" value="{{ $inputs['inquiry_type'] }}">
        <input type="hidden" name="inquiry_content" value="{{ $inputs['inquiry_content'] }}">
    </form>
@endsection
