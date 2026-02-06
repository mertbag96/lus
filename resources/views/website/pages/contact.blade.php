<x-website.layouts.app title="Contact">
    <!-- Contact -->
    <div class="py-8 flex flex-col justify-center items-center">
        <x-ui.title :level="1" variant="page" align="center" class="mb-4">Contact Us</x-ui.title>

        <!-- Description -->
        <p class="mb-6 text-sm text-center text-dark/90">
            Have a question, feedback, or issue? Feel free to contact us using the form below.
        </p>

        <!-- Form -->
        <form
            method="POST"
            action="{{ route('website.contact.store') }}"
            class="w-full lg:w-[85%] space-y-4 bg-white border border-dark/20 p-6 rounded-lg shadow-sm text-dark/90"
        >
            @csrf

            <div class="text-sm">
                <label for="name" class="block mb-2">Name <small class="text-primary">*</small></label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="w-full border border-dark/25 rounded-md py-2 px-3 focus:outline-none focus:border-dark/75"
                    placeholder="Enter your name"
                    value="{{ old('name') }}"
                    required
                >

                <div class="mt-1 ml-1"><x-ui.error name="name" /></div>
            </div>

            <div class="text-sm">
                <label for="email" class="block mb-2">Email <small class="text-primary">*</small></label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full border border-dark/25 rounded-md py-2 px-3 focus:outline-none focus:border-dark/75"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                >
                <div class="mt-1 ml-1"><x-ui.error name="email" /></div>
            </div>

            <div class="text-sm">
                <label for="message" class="block mb-2">Message <small class="text-primary">*</small></label>
                <textarea
                    rows="6"
                    id="message"
                    name="message"
                    class="w-full border border-dark/25 rounded-md py-2 px-3 focus:outline-none focus:border-dark/75 resize-none"
                    placeholder="Enter your message"
                    required
                >{{ old('message') }}</textarea>
                <div class="mt-1 ml-1"><x-ui.error name="message" /></div>
            </div>

            <x-ui.button type="submit" variant="primary-sm">Send Message</x-ui.button>

            @if (session('success'))
                <x-ui.alert type="success" class="mt-2.5">{{ session('success') }}</x-ui.alert>
            @endif
        </form>
    </div>

    <!-- FAQ -->
    <x-website.partials.faq />
</x-website.layouts.app>
