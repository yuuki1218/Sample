<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="navbar-area">
        <nav class="navbar navbar-dark">
            <div class="login-button">
                <a href="{{ action('LoginController@loginIndex') }}">ログイン画面</a>
            </div>
        </nav>
    </div>
    @yield('content')
</body>

</html>