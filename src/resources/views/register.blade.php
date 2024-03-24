@extends('layouts.app')

    @section('main')
    <div class="login-page">
    <h2 class="title">会員登録</h2>
    <form action="/register" method="post" name="register-form">
        @csrf
        <div class="input-form">
            <input type="text" class="name" placeholder="名前" value="{{ old('name') }}">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="input-form">
            <input type="email" class="email" value="{{ old('email') }}" placeholder="メールアドレス">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="input-form">
            <input type="password" class="password" placeholder="パスワード">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="input-form">
           <input type="password" class="password" placeholder="確認用パスワード">
           @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="login-button">
            <input type="submit" value="会員登録" class="submit">
        </div>
        <p>アカウントをお持ちの方はこちらから</p>
        <a href="/login" class="link-login">ログイン</a>
    </form>
    </div>
    @endsection