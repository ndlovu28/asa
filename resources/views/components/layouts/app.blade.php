<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
        <title>ASA</title>
        @if(Auth::guest())
        <link href="{{ asset('assets/css/pages/login-register-lock.css') }}" rel="stylesheet">
        @endif
        <link href="{{ asset('assets/node_modules/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        @livewireStyles
    </head>
    <body @if(Auth::guest()) class="skin-default card-no-border" @else class="skin-default-dark fixed-layout" @endif>
        {{--
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">ASA</p>
            </div>
        </div>
        --}}
        @if(Auth::guest())
            {{ $slot }}
        @else
            <div id="main-wrapper">
                @include('components.layouts.partials.header')
                @include('components.layouts.partials.nav')
                {{ $slot }}
                <footer class="footer">
                    © 2024 ASA
                </footer>
            </div>
        @endif

        <script src="{{ asset('assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
        <script src="{{ asset('assets/node_modules/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.min.js') }}"></script>
        <script src="{{ asset('assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
        @livewireScripts
        @stack('scripts')
    </body>
</html>