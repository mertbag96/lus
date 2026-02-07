@props([
    'type' => 'submit',
    'variant' => 'primary',
    'fullWidth' => false
])

@php
    $baseClass = 'font-medium text-center cursor-pointer transition-colors duration-200';
    $variantClass = match ($variant) {
        'primary-sm' => 'bg-primary text-light px-4 py-2 rounded-sm hover:bg-primary/90',
        'primary' => 'bg-primary hover:bg-red-600 text-white rounded-lg p-2.5',
        default => 'bg-primary hover:bg-red-600 text-white rounded-lg p-2.5',
    };
    $widthClass = $fullWidth ? 'w-full' : '';
    $classes = trim("{$baseClass} {$variantClass} {$widthClass} " . ($attributes->get('class') ?? ''));
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $classes])->except(['type', 'variant', 'fullWidth']) }}
>
    {{ $slot }}
</button>
