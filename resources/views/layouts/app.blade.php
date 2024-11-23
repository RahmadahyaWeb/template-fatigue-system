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

    <!--=============== TOASTER DEFAULT ===============-->
    @if (session('default'))
        <div class="toast-container" id="toast-container">
            <div class="toast" id="auto-hide">
                {{ session('default') }}
            </div>
        </div>
    @endif

    <!--=============== TOASTER SUCCESS ===============-->
    @if (session('success'))
        <div class="toast-container" id="toast-container">
            <div class="toast success" id="auto-hide">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!--=============== TOASTER DANGER ===============-->
    @if (session('danger'))
        <div class="toast-container" id="toast-container">
            <div class="toast danger" id="auto-hide">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!--=============== TOASTER WARNING ===============-->
    @if (session('warning'))
        <div class="toast-container" id="toast-container">
            <div class="toast warning" id="auto-hide">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!--=============== HEADER ===============-->
    <x-header />

    <!--=============== SIDEBAR ===============-->
    <x-sidebar />

    <!--=============== MAIN ===============-->
    <main class="main container" id="main">
        <h1 class="mb-3">@yield('title')</h1>

        @yield('content')
    </main>


    <!--=============== MAIN JS ===============-->
    @livewireScripts

    <script>
        setTimeout(function() {
            var toast = document.getElementById('auto-hide');
            if (toast) {
                toast.classList.remove('show');
                toast.remove();
            }
        }, 3000);
    </script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
