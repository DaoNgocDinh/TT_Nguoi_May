<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ví điện tử ĐTY')</title>
    <style>
        {!! preg_replace(
            [
                "/@import\s+'tailwindcss';\s*/",
                "/@source\s+[^;]+;\s*/",
                "/@theme\s*\{[\s\S]*?\}\s*/",
            ],
            '',
            file_get_contents(resource_path('css/app.css'))
        ) !!}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body class="wallet-shell">
    <div class="site-frame">
        @include('global_layout.navbar')
        @include('global_layout.header')

        <main>
            @yield('content')
        </main>

        @include('global_layout.footer')
    </div>
    <script>
        {!! file_get_contents(resource_path('js/wallet.js')) !!}
    </script>
</body>

</html>
