<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <title>@yield('title', 'Thanh toán hóa đơn')</title>
    </head>
    <body class="min-h-screen flex flex-col bg-[#F8F9FF] text-[#121212]">
        @include('global_layout.navbar')
        @include('global_layout.header')
        <main class="flex-1">
            @yield('body')
        </main>
        @include('global_layout.footer')
    </body>
</html>