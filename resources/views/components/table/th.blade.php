@props([
    'checkbox' => false,
])

@php
    $classes = ($checkbox ?? false)
    ? 'sr-only'
    : 'text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200'
@endphp

<th {{ $attributes->merge(['class' => 'ps-6 lg:ps-6 pe-6 py-3 text-start', 'scope' => 'col']) }}>
    <label class="flex">
        {{ $checkbox }}
        <span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
    </label>
</th>
