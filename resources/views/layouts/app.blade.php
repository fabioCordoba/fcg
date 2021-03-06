<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="id_user" content="{{Auth::id()}}">

        <title>{{ config('app.name', 'fcg') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        @livewireStyles
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="{!! asset('vendors/feather/feather.css')!!}">
        <link rel="stylesheet" href="{!! asset('vendors/mdi/css/materialdesignicons.min.css')!!}">
        <link rel="stylesheet" href="{!! asset('vendors/ti-icons/css/themify-icons.css')!!}">
        <link rel="stylesheet" href="{!! asset('vendors/typicons/typicons.css')!!}">
        <link rel="stylesheet" href="{!! asset('vendors/simple-line-icons/css/simple-line-icons.css')!!}">
        <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.base.css')!!}">
        {{--<link rel="stylesheet" href="{!! asset('css/vertical-layout-light/style.css')!!}"> --}}

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}" ></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">

        <livewire:app />

        
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        {{--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
        
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script src="{{ asset('js/helper.js') }}"></script>
        <script src="{!! asset('vendors/js/vendor.bundle.base.js')!!}"></script>
        @livewireScripts
    </body>
</html>
