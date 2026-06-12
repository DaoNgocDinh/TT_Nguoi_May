<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ứng dụng ĐTY')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    @include('global_layout.navbar')

    @include('global_layout.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('global_layout.footer')

</body>
</html>