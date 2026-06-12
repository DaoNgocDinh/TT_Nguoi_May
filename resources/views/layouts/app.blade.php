<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ví điện tử ĐTY')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
</body>

</html>
