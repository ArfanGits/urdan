<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="{{ asset('/') }}">
    @include('frontend.include.meta')

    <title>Urdan | {{$title}}</title>

    @include('frontend.include.styles')

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased cnt-home">
    @include('frontend.include.header')
    @yield('content')
    @include('frontend.include.footer')
    @include('frontend.include.scripts')
</body>

</html>
