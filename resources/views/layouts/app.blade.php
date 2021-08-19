<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
    <div>
        @include('layouts.nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('layouts.js')
</body>
</html>