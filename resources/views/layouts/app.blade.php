<!DOCTYPE html>
<html lang="en" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.partials.front.head')
      <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
     @livewireStyles
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.partials.front.nav')
        @yield('content')
        @include('layouts.partials.front.footer')

    </div>
    @include('layouts.partials.front.footerscripts')
    @yield('scripts')
    @livewireScripts
</body>
</html>