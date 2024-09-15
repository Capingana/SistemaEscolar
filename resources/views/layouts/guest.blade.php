<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')  
    <body class="register-page bg-body-secondary">
        @yield('guest')
    </body>
</html>
