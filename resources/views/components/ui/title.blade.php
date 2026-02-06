@props([
    'level' => 1,
    'variant' => 'page',
    'align' => 'left',
])

@php
    $tag = 'h' . min(max((int) $level, 1), 6);
    $variantClass = match ($variant) {
        'page' => 'text-xl lg:text-2xl text-primary',
        'page-sm' => 'text-2xl text-primary',
        'section' => 'text-lg text-primary mb-2',
        'card' => 'text-primary text-xl',
        'faq' => 'text-primary text-xl',
        default => 'text-xl text-primary',
    };
    $alignClass = $align === 'center' ? 'text-center' : '';
    $classes = trim("{$variantClass} {$alignClass} " . ($attributes->get('class') ?? ''));
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes])->except(['level', 'variant', 'align']) }}>
    {{ $slot }}
</{{ $tag }}>
