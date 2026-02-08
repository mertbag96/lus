@props([
    'icon',
    'size' => 'sm',
])

@php
    $sizes = [
        'xs' => 'w-5 h-5',
        'sm' => 'w-6 h-6',
        'md' => 'w-8 h-8',
        'lg' => 'w-10 h-10',
        'xl' => 'w-12 h-12',
    ];
@endphp

<i
    data-lucide="{{ $icon }}"
    {{ $attributes->class($sizes[$size] ?? $sizes['md']) }}
></i>
