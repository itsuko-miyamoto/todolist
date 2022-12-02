<!DOCTYPE html>
<html class="h-100">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TODOリスト</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('/js/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}"></link>
    <script src="{{ asset('/js/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fontawesome-free-5.7.1-web/css/all.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui-1.13.1/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

    <link rel="shortcut icon" href="">

    @yield('header')
</head>
<body class="h-100 d-flex flex-column ">
<main role="main" class="flex-shrink-0">
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="title">Todoリスト</div>
            </div>
            <div class="col-6 text-end">
            @if (Auth::check())
                <i class="fas fa-user"></i>     <link rel="stylesheet" type="text/css" href="{{ asset('/css/fontawesome-free-5.7.1-web/css/all.min.css') }}">
                {{ (Auth::user()) ? Auth::user()->name : '' }}
                <form method="post" action="{{ route('logout') }}">
                @csrf
                    <a href="javascript:void(0)" onclick="
                        event.preventDefault();
                        this.closest('form').submit();">ログアウト</a>
                </form>
            @endif
            </div>
        </div>
      </div>
</header>

    <!-- メインコンテンツ -->
    <div class="main_contents">

@yield('content')

    </div>
    <!-- /メインコンテンツ -->
</main>
<footer class="footer mt-auto py-3 text-center">
    <div class="text-white">
        <p>Copyright 2022-{{ date('Y') }} Connectill Co.,Ltd.</p>
    </div>
</footer>

@stack('scripts')
</body>
</html>
