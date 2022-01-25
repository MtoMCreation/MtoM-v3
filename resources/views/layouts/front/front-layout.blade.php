<!DOCTYPE html>


<!--  Created by MtoM Creation .Inc ©       *             *      *               *  -->
<!--      *                *    _                 *                    * _   ©      -->
<!--  -----       *            /|     *       *            *            /|          -->
<!--  -----       |\_   *    ///|  ____________            |\_   *    ///|       ----->
<!--  -----  *    |||\     ////||  ||||||||||||     *      |||\     ////||       ----->
<!--  -----       ||||\___////|||      ||||   ——————————   ||||\___////|||   *   ----->
<!--  -----       ||||||////|||||  *   ||||   ||||||||||   ||||||////|||||       ----->
<!--  -----       |||||     |||||      ||||   |||    |||   |||||     |||||       ----->
<!--  -----   *   |||||     |||||      ||||   ||||||||||   |||||     |||||       ----->
<!--  -----       -----     |||||    * ----   ----------   -----     |||||       ----->
<!--  -----           *     -----          *           *             -----    *     -->
<!--    *                         *                                      *          -->
<!--         *    Montréal_CA | Marseille_FR         *         *                *   -->
<!--              info@mtom-creation.com      *                     *               -->
<!--     *                    *                      *                      *       -->
<!--              Création de site web et stratégies numériques    *                -->
<!------------------------------------------------------------------------------------->


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P3DS6LT');</script>
    <!-- End Google Tag Manager -->

    <meta name="description" content="@yield('meta-description', 'Création de site web et stratégies numériques à Montréal')">


    <meta property="og:url" content="{{ \Illuminate\Support\Facades\URL::current() }}" />
    <meta property="og:title" content="@yield('title', config('app.tagline'))" />
    <meta property="og:description" content="@yield('meta-description', 'Création de site web et stratégie numérique à Montréal')" />
    <meta property="og:image" content="@yield('og-meta-image', asset('storage/img/visuels/building-websites.png'))" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="{{ config('app.tagline') }}" />

    <title>@yield('title', config('app.name'))</title>

    <link rel="icon" href="{{ URL::asset('storage/img/logos/favicon.png') }}" type="image/x-icon"/>

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
        .image-fond-texture{
            background-image: url("{{ asset('storage/img/backgrounds/background-section2.png') }}");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles

    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>


{{--    reCAPTCHA --}}
    {!! htmlScriptTagJsApi([
            'action' => 'homepage',
            'callback_then' => 'callbackThen',
            'callback_catch' => 'callbackCatch'
        ]) !!}


</head>

<body class="font-sans antialiased min-h-screen relative selection:bg-mtom-orange/40">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3DS6LT"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="content relative"
     x-cloak
     x-data="{ mobileMenu: false, megaMenu: false }">

    @yield('test')

    <div class="hidden md:block">
        @include('layouts.front.front-top-navigation')
    </div>

    <div class="sticky top-0 bg-white"
         x-show="!mobileMenu"
         style="z-index: 90">
        @include('layouts.front.front-navigation')

    </div>

    <div class="lg:hidden">
        @include('layouts.front.front-mobile-menu')
    </div>

    <div class="page-content bg-white min-h-screen" x-show="!mobileMenu">
        <div
{{--            x-data="{show: false}"--}}
{{--             x-show="show"--}}
{{--             x-init="setTimeout(() => show = true, 200)"--}}
{{--             x-transition:enter="transition.ease-out.duration-2000"--}}
{{--             x-transition:enter-start="opacity-0 scale-90"--}}
{{--             x-transition:enter-end="opacity-100 scale-100"--}}
{{--             x-transition:leave="transition ease-in duration-3000"--}}
{{--             x-transition:leave-start="opacity-100 scale-100"--}}
{{--             x-transition:leave-end="opacity-0 scale-90"--}}
{{--            x-cloak--}}
        >
            {{ $slot }}
        </div>
    </div>

    <div>
        @include('layouts.front.front-footer')
    </div>

    <!-- Flash message -->
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div x-data="{show: true}"
             x-show="show"
             x-init="setTimeout(() => show = false, 10000)"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-50 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-50 transform scale-90"
             x-cloak
             class="flex items-center space-x-4 px-5 py-2 rounded bg-green-500 bg-opacity-80 inline font-bold text-white" style="position: fixed; top: 90vh; right: 100px">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 @click="show = false">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{\Illuminate\Support\Facades\Session::get('success')}}</span>
        </div>
    @endif

</div>
@livewireScripts

</body>

</html>

<script>

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $("#header").addClass("shadow");
        }
        else {
            $("#header").removeClass("shadow");
        }
    });

    document.addEventListener("turbolinks:load", function(event) {
        window.livewire.restart();
    });


</script>
