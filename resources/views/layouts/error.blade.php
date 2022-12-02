<!DOCTYPE html>
<html class="h-100">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zai-pro</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('/js/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}"></link>
    <script src="{{ asset('/js/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/NotoSansJP.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/Lalezar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fontawesome-free-5.7.1-web/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery-ui-1.13.1/themes/smoothness/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery-ui-1.13.1/themes/base/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui-1.13.1/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

    <link rel="shortcut icon" href="">

    @yield('header')
</head>
<body class="h-100 d-flex flex-column ">

    <header>
        <div class="row">
            <div class="col-6 zai-pro"><img src="{{ asset('images/Zai-Pro.png') }}" height="50" class="mt-2"></div>
            <div class="col-6 text-end"><img src="{{ asset('images/connectill_logo_w.png') }}" width="90" class="mt-4"></div>
        </div>
    </header>

    <main role="main" class="flex-shrink-0">
        <!-- メインコンテンツ -->
        <div class="main_contents">
            <main role="main" class="text-center login-box flex-shrink-0 ">
                <div class="container">

@yield('content')

@if (isset($msg) && $msg != '')
                    <h4>{{ $msg }}</h4>
@endif
                </div>
            </main>
        </div>
        <!-- /メインコンテンツ -->
    </main>
    <footer class="footer mt-auto py-3 text-center">
        <div class="text-white">
            <p>Copyright 2022-{{ date('Y') }} Connectill Co.,Ltd.</p>
        </div>
    </footer>
<!-- /ラップ -->
<!-- JS -->
<script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('/js/jquery/jquery-ui.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
var $grid = $('.service_list'),
    emptyCells = [],
    i;

// 子パネル (li.cell) の数だけ空の子パネル (li.cell.is-empty) を追加する。
for (i = 0; i < $grid.find('.service_list_item').length; i++) {
    emptyCells.push($('<li>', { class: 'service_list_item is-empty' }));
}

$grid.append(emptyCells);
</script>
<script>
//エンターでのsubmitを禁止
$(document).ready(function () {
    $('input,textarea[readonly]').not($('input[type="button"],input[type="submit"]')).keypress(function (e) {
        if (!e) var e = window.event;
        if (e.keyCode == 13) return false;
    });
});
</script>

    @stack('scripts')
</body>
</html>
