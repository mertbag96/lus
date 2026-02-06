<footer class="mb-4 px-6 py-4 rounded-lg shadow-sm bg-white border border-dark/20 text-primary">
    <div class="flex justify-between items-center">
        <div>
            <x-ui.logo />
        </div>

        <nav class="flex items-center space-x-6 text-sm">
            <x-ui.link href="{{ route('website.pages.terms') }}" external>
                Terms of Use
            </x-ui.link>
            <x-ui.link href="{{ route('website.pages.privacy') }}" external>
                Privacy Policy
            </x-ui.link>
            <x-ui.link href="{{ route('website.contact.show') }}">
                Contact
            </x-ui.link>
        </nav>
    </div>
</footer>
