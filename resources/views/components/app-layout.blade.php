<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @isset($title)
            {{ $title }} | UMKM
        @else
            UMKM
        @endisset
    </title>

    
    @vite('resources/css/app.css')
</head>

<body>
    @if (!request()->is('register*') && !request()->is('login'))
        <header class="">
            <x-navbar></x-navbar>
        </header>
    @endif
    <main>
        {{ $slot }}
    </main>
    @if (!request()->is('register*') && !request()->is('login'))
        <footer class="container mx-auto">
            <x-footer></x-footer>
        </footer>
    @endif
</body>

</html>
