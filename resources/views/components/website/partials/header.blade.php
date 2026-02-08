<header class="mt-4 px-6 py-4 rounded-lg shadow-sm bg-white border border-dark/10 text-primary z-50">
    <div class="flex justify-between items-center">
        <!-- Logo -->
        <div>
            <x-ui.link
                :href="route('website.pages.home')"
                class="flex items-center space-x-1 font-medium text-lg text-primary"
            >
                <!-- Icon -->
                <x-ui.icon icon="link"></x-ui.icon>

                <!-- Text -->
                <span>
                    {{ config('app.name') ?? 'LUS' }}
                </span>
            </x-ui.link>
        </div>

        <!-- Navigation -->
        <nav class="flex items-center space-x-6 text-sm">
            <!-- Contact -->
            <x-ui.link
                href="{{ route('website.contact.show') }}"
                class="hidden sm:block hover:underline"
            >
                Contact
            </x-ui.link>

            @auth
                <!-- Dashboard -->
                <x-ui.link
                    href="{{ route('panel.dashboard') }}"
                    class="bg-primary py-1 px-2 rounded-lg text-white hover:bg-red-600 transition-colors duration-200"
                >
                    Dashboard
                </x-ui.link>
            @else
                <!-- Get Started -->
                <x-ui.link
                    href="{{ route('website.pages.auth.login') }}"
                    class="bg-primary py-1 px-2 rounded-lg text-white hover:bg-red-600 transition-colors duration-200"
                >
                    Get Started
                </x-ui.link>
            @endauth
        </nav>
    </div>
</header>
