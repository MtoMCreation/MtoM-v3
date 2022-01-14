<!DOCTYPE html>
<!--  Created by MtoM Creation .Inc ©       *             *      *               *  -->
<!--             *              _                 *                    * _   ©      -->
<!--  -----       _            /|     *       *            _            /|          -->
<!--  -----       |\_   *    _//|  ____________            |\_   *    _//|       ----->
<!--  -----  *    |||\     _///||  ||||||||||||     *      |||\     _///||       ----->
<!--  -----       ||||\___////|||      ||||   ——————————   ||||\___////|||   *   ----->
<!--  -----       ||||||////|||||  *   ||||   ||||||||||   ||||||////|||||       ----->
<!--  -----       |||||     |||||      ||||   |||    |||   |||||     |||||       ----->
<!--  -----   *   |||||   * |||||      ||||   ||||||||||   |||||     |||||       ----->
<!--  -----       -----     |||||    * ----   ----------   -----     |||||       ----->
<!--  -----           *     -----          *           *             -----    *     -->
<!--            * Montréal - CA       *                        *                    -->
<!--     *                    *              *       *               *      *       -->

<!------------------------------------------------------------------------------------------>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta-description', 'Création de site web et stratégies numériques à Montréal')">

    <meta property="og:url" content="{{ \Illuminate\Support\Facades\URL::current() }}" />
    <meta property="og:title" content="@yield('titre', config('app.name'))" />
    <meta property="og:description" content="@yield('meta-description', 'Création de site web et stratégies numériques à Montréal')" />
    <meta property="og:image" content="@yield('og-meta-image', asset('storage/img/logos/favicon.png'))" />

    <title>Dashboard @yield('title', '')</title>

    <link rel="icon" href="{{ URL::asset('storage/img/logos/favicon-orange.png') }}" type="image/x-icon"/>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <!-- font-family: 'Poppins', sans-serif; -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{ $custom_css ?? "" }}

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-clipboard@0.1.x/dist/alpine-clipboard.umd.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>


    <script>
        tinymce.init({
            selector: '.tinymce',
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            // language: 'fr_FR'
        });
    </script>

    @livewireStyles

</head>

<body class="relative">

    <div class="flex relative"
         x-cloak
         x-data="{ mobileMenu: false, megaMenu: false }">

        <!-- Mobile Toggle menu button -->
        <span class="absolute z-50 top-10 right-10 cursor-pointer lg:hidden" @click="mobileMenu = !mobileMenu">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </span>

        <!-- Desktop Menu -->
        <aside class="hidden lg:flex flex-col justify-between h-screen sticky top-0 py-20 px-6 bg-mtom-gray text-white">
            @include('layouts.back.back-side-navigation')
        </aside>

        <!-- Mobile Menu -->
        <aside x-show="mobileMenu"
               class="absolute lg:hidden">
            <div class="h-screen sticky top-0 z-50 py-20 px-6 bg-mtom-gray text-white flex flex-col justify-between">
                @include('layouts.back.back-side-navigation')
            </div>
        </aside>

        <!-- Page content -->
        <main class="relative p-3 md:p-6 xl:p-20 w-full bg-white min-h-screen">
            <header class="bg-gray-100 rounded-lg shadow py-6 px-8 border-b-2 text-center">
                <h2 class="font-semibold uppercase font-title text-3xl text-gray-800 leading-tight">
                    {{ $header ?? "Titre de la page" }}
                </h2>
            </header>

            <!-- Flash message -->
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div x-data="{show: true}"
                     x-show="show"
                     x-init="setTimeout(() => show = false, 3000)"
                     class="flex items-center space-x-4 px-5 py-2 rounded bg-green-500 bg-opacity-80 inline font-bold text-white" style="position: fixed; top: 90vh; right: 100px">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         @click="show = false">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{\Illuminate\Support\Facades\Session::get('success')}}</span>
                </div>
            @endif

            <div class="" style="position: fixed; top:50vh; left: 50%">

            </div>

            {{ $slot }}
        </main>

    </div>


    @livewireScripts

</body>

</html>

<script>

</script>
