<body class="min-h-screen flex flex-col">

    @include('global_layout.navbar')
    @include('global_layout.header')
    
    <main class="flex-1">
        <div class="w-full">
            <img src="{{ asset('images/poster2.png') }}" 
                 alt="Banner" 
                 class="w-full h-auto block">
        </div>
        
        @yield('content')
    </main>

    @include('global_layout.footer')

</body>