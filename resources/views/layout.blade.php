<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Városok listája</title>
     <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('cities.index') }}">Városok listája</a></li>
                <li><a href="{{ route('cities.create') }}">Új város hozzáadása</a></li>
            </ul>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>@ 2026 Agócs Geri</footer>
</body>
</html>