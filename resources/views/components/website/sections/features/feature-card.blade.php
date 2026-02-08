<div class="flex flex-col justify-center items-center space-y-2 text-center">
    <!-- Icon -->
    <x-ui.icon
        icon="{{ $icon }}"
        size="lg"
        class="text-primary/75"
    ></x-ui.icon>

    <!-- Title -->
    <h3 class="text-primary text-xl">
        {{ $title }}
    </h3>

    <!-- Description -->
    <p class="px-4 text-sm text-dark/85">
        {{ $description }}
    </p>
</div>
