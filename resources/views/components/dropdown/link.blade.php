@props([
    'separator' => false,
    'icon' => '',
    ])

@if($separator)
    <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
@endif

<a {{ $attributes->merge(['class' => 'flex items-center gap-x-2 py-2 px-3 rounded-md text-sm text-neutral-700 hover:bg-neutral-100 focus:outline-none focus:bg-neutral-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 cursor-pointer']) }}>
    @if($icon)
        <x-dynamic-component :component="'icons.' . $icon"/>
    @endif
    {{ $slot }}
</a>
