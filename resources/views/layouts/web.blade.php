<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">

    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- Styles -->
    <link href="{{ asset('layui/css/layui.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">
</head>
<body>
    <div id="app" class="site">
        <div class="layui-fluid layui-bg-black">
            <div class="layui-container">
                <div class="layui-row">
                    <div class="layui-col-lg12">
                        <div class="logo lt">
                            <a href="{{ url('/') }}" title="seo">
                                <img src="{{ asset('layui/images/logo.png') }}" alt="seo">
                            </a>
                        </div>
                        <div class="layui-hide-xs lt">
                            <ul class="layui-nav">
                                <li class="layui-nav-item layui-this"><a href="{{ url('/') }}"><i class="layui-icon"></i> SEO查询</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-container">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('layui/layui.all.js') }}"></script>
    @yield('layui')
</body>
</html>
