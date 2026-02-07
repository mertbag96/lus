@props(['type' => 'success'])

@php
    $typeClass = match ($type) {
        'success' => 'bg-green-100 border-green-200 text-green-700',
        'error' => 'bg-red-100 border-red-200 text-red-700',
        'info' => 'bg-blue-100 border-blue-200 text-blue-700',
        default => 'bg-green-100 border-green-200 text-green-700',
    };
@endphp

<div
    {{ $attributes->merge(['class' => "w-full border rounded-sm shadow-xs p-4 text-center {$typeClass}"])->except('type') }}
>
    {{ $slot }}
</div>
