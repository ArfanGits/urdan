<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="{{ asset('/') }}">

    @include('backend.include.meta')

    <title>Admin | {{$title}}</title>

    @include('backend.include.styles')

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased cnt-home">
    @include('backend.include.header')
    @include('backend.include.navbar')
    @yield('content')
    @include('backend.include.footer')
    @if (Session::has('message'))
        <script>
            $(document).ready(function() {
                toastr.success('{{ Session::get('message')}}');
            })
        </script>
    @endif
    @include('backend.include.scripts')
</body>

</html>
