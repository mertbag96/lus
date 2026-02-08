<div class="px-4 py-20 bg-white border border-dark/10 rounded-lg shadow-sm flex flex-col justify-center items-center text-center space-y-8">
    <!-- Welcome -->
    <div class="flex flex-col justify-center items-center space-y-6">
        <!-- Title -->
        <h1 class="text-xl md:text-3xl text-primary">
            Welcome to {{ config('app.name') ?? 'LUS' }}
        </h1>

        <!-- Description -->
        <p class="w-full xs:w-[90%] sm:w-3/4 xl:w-full text-dark text-center">
            With {{ config('app.name') ?? 'LUS' }} -
            Laravel URL Shortener, shorten your links in seconds for free.
        </p>
    </div>

    <!-- Form -->
    <form
        method="POST"
        action="{{ route('website.url.shorten') }}"
        class="w-full md:w-[90%] xl:w-2/3 flex flex-col space-y-4"
    >
        @csrf

        <!-- Input -->
        <input
            type="text"
            name="url"
            class="w-full p-4 border border-dark/10 rounded-md shadow-sm text-dark text-xs md:text-sm focus:ring focus:ring-dark/90 focus:outline-none"
            placeholder="Enter the URL to be shortened"
            value="{{ old('url') }}"
            required
        />

        @error('url')
            <small class="text-xs text-primary text-left animate-fade-in">
                {{ $message }}
            </small>
        @enderror

        <!-- Button -->
        <button
            type="submit"
            class="w-full p-3 bg-primary border border-dark/10 rounded-lg shadow-sm text-md text-white hover:bg-red-600 transition-colors duration-300 cursor-pointer"
        >
            Shorten URL
        </button>

        @if (session('short_url'))
            <div class="border-2 border-green-300 bg-green-200 shadow-xs rounded-lg flex flex-col lg:flex-row justify-center items-center gap-2 p-4 text-green-700">
                <!-- Text -->
                <span>
                    Shortened URL:
                </span>

                <!-- Link -->
                <x-ui.link
                    target="_blank"
                    href="{{ session('short_url') }}"
                    class="font-medium underline"
                >
                    {{ session('short_url') }}
                </x-ui.link>
            </div>
        @endif
    </form>
</div>
