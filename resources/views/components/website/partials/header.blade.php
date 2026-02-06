<header class="mt-4 px-6 py-4 rounded-lg shadow-md bg-white border border-dark/20 text-primary z-50">
    <div class="flex justify-between items-center">
        <div>
            <x-ui.logo />
        </div>

        <nav class="flex items-center space-x-6 text-sm">
            <x-ui.link href="{{ route('website.contact.show') }}" class="hidden sm:block hover:underline">
                Contact
            </x-ui.link>

            @auth
                <x-ui.link href="{{ route('panel.dashboard') }}" variant="button">
                    Dashboard
                </x-ui.link>
            @else
                <x-ui.link href="{{ route('website.pages.auth.login') }}" variant="button">
                    Get Started
                </x-ui.link>
            @endauth
        </nav>
    </div>
</header>
