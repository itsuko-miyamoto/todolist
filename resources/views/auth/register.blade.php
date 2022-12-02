@extends('layouts.app')

@section('header')
    <title>{{ config('app.name') }}</title>
@endsection

@section('content')
<div class="container-fluid mt-5">
    <div class="col-sm-4 offset-sm-4">
        <div class="heading section">
            <h3 class="center"><span>アカウント登録</span></h3>
        </div>

        <form method="POST" action="{{ route('register') }}" class="form" novalidate>
        @csrf
            <ul>
                <li>
                    <label for="email" class="mt-2">メールアドレス:</label>
                    <input type="text" id="email" name="email" size="20" class="form-control" value="{{ old('email') }}" placeholder="例）abc@test.com" autofocus required>
                    @if ($errors->has('email'))<p class="error">
                    {{ $errors->first('email') }}</p>
                    @endif
                </li>
                <li>
                    <label for="password" class="mt-2">パスワード：</label>
                    <input id="password" type="password" name="password" class="form-control" width="1000" placeholder="パスワード" required>
                </li>
                <li>
                    <label for="password-confirm" class="mt-2">パスワード（確認）：</label>
                    <input id="password-confirm" type="password" name="password_confirmation" class="form-control" width="1000" placeholder="もう一度パスワードを入力してください。" required>
                    @if ($errors->has('password'))<p class="error">
                    {{ $errors->first('password') }}</p>
                    @endif
                </li>
                <li class="short">
                    <label for="name" class="mt-2">お名前：</label>
                    <input type="text" name="name" width="1000" value="{{ old('name') }}" class="form-control" placeholder="例）テスト太郎" required>
                    @if ($errors->has('name'))<p class="error">
                    {{ $errors->first('name') }}</p>
                    @endif
                </li>
            </ul>

            <section class="buttonModule section mt-2 text-center">
                <button type="submit" class="btn btn-base-dark">上記の内容で登録する</button>
            </section>
        </form>
    </div>
</div>
@endsection
