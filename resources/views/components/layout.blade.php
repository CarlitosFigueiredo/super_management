<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Super Gestão' }}</title>
</head>

<body class="bg-gray-100">

    <div class="flex">

        <!-- Sidebar -->
        <x-sidebar />

        <!-- Conteúdo -->
        <div class="flex-1">

            <!-- Topo -->
            <header class="bg-white shadow p-4">
                <h1 class="text-xl font-semibold">

                    {{ $title ?? 'Super Gestão' }}
                </h1>
            </header>

            <!-- Conteúdo da página -->
            <main class="p-6">
                {{ $slot }}
            </main>

        </div>

    </div>

</body>

</html>
