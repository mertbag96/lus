@props([
    'href' => '#',
    'external' => false,
    'variant' => 'default',
])

@php
    $baseClass = 'transition-colors duration-200';
    $variantClass = match ($variant) {
        'button' => 'bg-primary py-1 px-2 rounded-lg text-white hover:bg-red-600',
        default => 'text-primary hover:underline',
    };
    $classes = trim("{$baseClass} {$variantClass} " . ($attributes->get('class') ?? ''));
@endphp

<a
    href="{{ $href }}"
    @if ($external) target="_blank" rel="noopener noreferrer" @endif
    {{ $attributes->merge(['class' => $classes])->except(['href', 'external', 'variant']) }}
>
    {{ $slot }}
</a>
