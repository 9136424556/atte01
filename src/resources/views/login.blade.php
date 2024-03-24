
@extends('layouts.app')

    @section('main')
   <div class="login-page">
    <h2 class="title">ログイン</h2>
    <form action="/login" method="post" name="login-form">
        @csrf
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
        <div class="login-button">
            <input type="submit" value="ログイン" class="submit">
        </div>
        <p>アカウントをお持ちでない方はこちらから</p>
        <a href="/register" class="link-register">会員登録</a>
    </form>
    </div>
    @endsection
