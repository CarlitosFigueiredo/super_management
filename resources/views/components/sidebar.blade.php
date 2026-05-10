<aside class="w-64 bg-gray-800 text-white min-h-screen p-4">
    <nav>
        <ul class="space-y-2">
            <li>
                <a
                    href="{{ route('dashboard.index') }}"
                   class="block p-2 rounded hover:bg-gray-700"
                >
                    Dashboard
                </a>
            </li>

            <li>
                <a
                    href="{{ route('about.index') }}"
                    class="block p-2 rounded hover:bg-gray-700"
                >
                    Sobre Nós
                </a>
            </li>

            <li>
                <a
                    href="{{ route('contact.index') }}"
                    class="block p-2 rounded hover:bg-gray-700"
                >
                    Contato
                </a>
            </li>
        </ul>
    </nav>
</aside>
