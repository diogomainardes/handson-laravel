<html>
<head>
    @yield('script-head')
</head>
<body>
    @include('shared.header')
    <div>
        <h1>Página master</h1>

        <div>
            @yield('body')
        </div>
    </div>
    @include('shared.footer')    

    @yield('script-footer')
</body>

</html>

