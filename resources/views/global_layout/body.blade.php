<body class="min-h-screen flex flex-col">

    @include('global_layout.navbar')
    @include('global_layout.header')
    <main class="flex-1">
        @yield('content')
    </main>

    @include('global_layout.footer')

</body>