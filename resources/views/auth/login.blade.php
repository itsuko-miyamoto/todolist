@extends('layouts.app')

@section('header')
    <title>{{ config('app.name') }}</title>
@endsection

@section('content')

<div class="container-fluid mt-5">
    <div class="col-sm-4 offset-sm-4">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="メールアドレス">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group my-3">
                <input type="password" name="password" class="form-control" placeholder="パスワード">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-base">ログイン</button>
            </div>

            <div class="mt-3 text-center">
                <a href="{{ route('register') }}" class="btn btn-secondary">アカウント作成</a>
            </div>


        </form>
    </div>
</div>
@endsection
