<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Example</title>
    @livewireStyles
</head>
<body>
    <header>
        <nav>

            <a href="{{ route('about') }}">About</a>

        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>
