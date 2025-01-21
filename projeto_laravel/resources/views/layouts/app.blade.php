<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Meu Site</title>
    @vite('resources/css/app.css') <!-- Certifique-se que Tailwind está configurado -->
</head>
<body class="bg-green-100 text-gray-800">
    <header class="bg-green-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Meu Site Laravel</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-gray-200">Home</a></li>
                    <li><a href="/gerar-cpf" class="hover:text-gray-200">Gerador de CPF</a></li>
                    <li><a href="/adicionar-endereco" class="hover:text-gray-200">Adicionar Endereço</a></li>
                    <li><a href="/listar-cpfs" class="hover:text-gray-200">Listar CPFs</a></li>
                    <li><a href="/listar-enderecos" class="hover:text-gray-200">Listar Endereços</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto py-8">
        @yield('content')
    </main>
    <footer class="bg-green-600 text-white text-center p-4 mt-4">
        <p>© 2025 Meu Site Laravel. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
