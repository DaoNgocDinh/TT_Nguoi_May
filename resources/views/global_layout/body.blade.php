<body class="min-h-screen flex flex-col">

    @include('global_layout.navbar')
    @include('global_layout.header')
    <main class="flex-1">
        @yield('content')
    </main>

    <script>
        {!! file_get_contents(resource_path('js/wallet.js')) !!}
    </script>
    
    @include('global_layout.footer')

</body>
