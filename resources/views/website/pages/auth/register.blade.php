<x-website.layouts.auth
    title="Create an account to nanage your URLS"
    formTitle="Create an account"
    formDescription="Please enter your information to create an account"
>
    <form
        method="POST"
        action="{{ route('auth.register') }}"
        class="w-[94%] sm:w-[400px] md:w-[320px] lg:w-[420px] flex flex-col space-y-4 text-dark/90"
        novalidate
    >
        @csrf

        <div class="flex flex-col space-y-2 text-sm">
            <label for="name">Name</label>
            <input
                type="text"
                name="name"
                id="name"
                class="border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline"
                placeholder="John Doe"
                value="{{ old('name') }}"
                maxlength="255"
                required
            >

            <x-ui.error name="name" />
        </div>

        <div class="flex flex-col space-y-2 text-sm">
            <label for="email">Email address</label>
            <input
                type="email"
                name="email"
                id="email"
                class="border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline"
                placeholder="johndoe@example.com"
                value="{{ old('email') }}"
                maxlength="255"
                required
            >
            <x-ui.error name="email" />
        </div>

        <div class="flex flex-col space-y-2 text-sm">
            <label for="password">Password</label>
            <div class="w-full relative flex flex-col space-y-2">
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="password-input w-full border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline placeholder:leading-8"
                    placeholder="•••••••••••"
                    maxlength="255"
                    required
                >
                <x-ui.error name="password" />

                <!-- Show Password -->
                <i
                    data-lucide="eye"
                    class="password-eye absolute top-2.5 right-2.5 w-5 h-5 text-dark/50 hover:text-primary/90 cursor-pointer transition duration-200"
                ></i>

                <!-- Hide Password -->
                <i
                    data-lucide="eye-off"
                    class="password-eye-off hidden absolute top-2.5 right-2.5 w-5 h-5 text-dark/50 hover:text-primary/90 cursor-pointer transition duration-200"
                ></i>
            </div>
        </div>

        <!-- Password Confirmation -->
        <div class="flex flex-col space-y-2 text-sm">
            <!-- Label -->
            <label for="password-confirmation">
                Password Confirmation
            </label>

            <!-- Input & Password Visibility Togglers -->
            <div class="w-full relative flex flex-col space-y-2">
                <!-- Input -->
                <input
                    type="password"
                    name="password_confirmation"
                    id="password-confirmation"
                    class="password-input w-full border border-dark/20 rounded-lg shadow-sm px-3 py-2 focus:outline placeholder:leading-8"
                    placeholder="•••••••••••"
                    maxlength="255"
                    required
                >

                <x-ui.error name="password_confirmation" />

                <!-- Show Password -->
                <i
                    data-lucide="eye"
                    class="password-eye absolute top-2.5 right-2.5 w-5 h-5 text-dark/50 hover:text-primary/90 cursor-pointer transition duration-200"
                ></i>

                <!-- Hide Password -->
                <i
                    data-lucide="eye-off"
                    class="password-eye-off hidden absolute top-2.5 right-2.5 w-5 h-5 text-dark/50 hover:text-primary/90 cursor-pointer transition duration-200"
                ></i>
            </div>
        </div>

        <!-- Accept Terms of Use & Privacy Policy -->
        <div class="flex items-center space-x-2 text-sm">
            <!-- Input -->
            <input
                type="checkbox"
                name="accept"
                id="accept"
                style="accent-color: #E94F37;"
                @checked(old('accept'))
                required
            >

            <label for="accept">
                I agree to the
                <x-ui.link href="{{ route('website.pages.terms') }}" external>Terms of Use</x-ui.link>
                and
                <x-ui.link href="{{ route('website.pages.privacy') }}" external>Privacy Policy</x-ui.link>
            </label>
        </div>

        <x-ui.error name="accept" class="block text-xs text-primary -mt-1" />

        <div class="text-sm">
            <x-ui.button type="submit" fullWidth>Create Account</x-ui.button>
        </div>

        <div class="mt-4 flex justify-center items-center space-x-1 text-sm">
            <p class="text-dark/90">Already have an account?</p>
            <x-ui.link href="{{ route('website.pages.auth.login') }}">Sign in</x-ui.link>
        </div>
    </form>
</x-website.layouts.auth>
