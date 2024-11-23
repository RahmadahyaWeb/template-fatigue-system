<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <title>FATIGUE SYSTEM</title>

    @livewireStyles
</head>

<body>

    <!--=============== PRELOADER ===============-->
    <div class="preloader">
        <div class="loader"></div>
    </div>

    <!--=============== TOASTER ===============-->
    <div class="toast-container" id="toast-container"></div>

    <!--=============== HEADER ===============-->
    <x-header />

    <!--=============== SIDEBAR ===============-->
    <x-sidebar />

    <!--=============== MAIN ===============-->
    <main class="main container" id="main">
        <h1>@yield('title')</h1>

        @yield('content')
    </main>

    @livewireScripts

    <!--=============== MAIN JS ===============-->
    <script>
        $wire.on('show-toast', () => {
            showToast();
        });
    </script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
