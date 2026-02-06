@props([
    'name',
])

@if ($errors->has($name))
    <small {{ $attributes->merge(['class' => 'text-xs text-primary']) }}>
        {{ $errors->first($name) }}
    </small>
@endif
