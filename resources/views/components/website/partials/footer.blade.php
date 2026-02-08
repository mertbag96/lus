<footer class="mb-4 px-6 py-4 rounded-lg shadow-sm bg-white border border-dark/10 text-primary">
    <div class="flex justify-between items-center">
        <!-- Logo -->
        <div>
            <x-ui.link
                href="{{ route('website.pages.home') }}"
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
            <!-- Terms of Use -->
            <x-ui.link
                target="_blank"
                href="{{ route('website.pages.terms') }}"
                class="hover:underline"
            >
                Terms of Use
            </x-ui.link>

            <!-- Privacy Policy -->
            <x-ui.link
                target="_blank"
                href="{{ route('website.pages.privacy') }}"
                class="hover:underline"
            >
                Privacy Policy
            </x-ui.link>

            <!-- Contact -->
            <x-ui.link
                href="{{ route('website.contact.show') }}"
                class="hover:underline"
            >
                Contact
            </x-ui.link>
        </nav>
    </div>
</footer>
