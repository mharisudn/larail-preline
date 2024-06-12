@props([
    'icon' => ''
])
<a {{ $attributes->merge(['href' => '#','class' => 'py-2 px-3 flex items-center gap-x-2 text-sm font-medium rounded-lg text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300']) }}>
    @if($icon)
        <x-dynamic-component :component="'icons.' . $icon" />
    @endif
    {{ $slot }}
</a>
