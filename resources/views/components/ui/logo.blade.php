@props([
    'href' => null,
    'size' => 'default',
    'variant' => 'default'
])

@php
    $url = $href ?? route('website.pages.home');
    $sizeClass = match ($size) {
        'sm' => 'text-lg space-x-1',
        'md' => 'text-2xl space-x-1',
        'lg' => 'text-3xl space-x-1',
        default => 'text-lg font-medium space-x-1',
    };
    $iconSize = match ($size) {
        'sm' => 'w-6 h-6',
        'md' => 'w-8 h-8',
        'lg' => 'w-10 h-10',
        default => 'w-6 h-6',
    };
    $colorClass = $variant === 'light' ? 'text-white' : 'text-primary';
@endphp

<a
    href="{{ $url }}"
    class="flex items-center {{ $sizeClass }} {{ $colorClass }} {{ $attributes->get('class') }}"
    {{ $attributes->except('class') }}
>
    <i data-lucide="link" class="{{ $iconSize }} {{ $colorClass }}"></i>
    <span>{{ config('app.name') ?? 'LUS' }}</span>
</a>
