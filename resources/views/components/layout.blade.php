<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Super Gestão' }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="topo">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>
        <div class="menu">
            <x-sidebar />
        </div>
    </div>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
