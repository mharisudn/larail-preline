@props([
    'separator' => false,
])
<div {{ $attributes->merge(['class' => 'hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-40 z-10 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-neutral-700 dark:bg-neutral-800 dark:border dark:border-neutral-700']) }}>
    <div {{ $attributes->merge(['class' => 'py-2 first:pt-0 last:pb-0']) }}>
        {{ $slot }}
    </div>
    @if($separator)
        <div class="py-2 first:pt-0 last:pb-0">
            {{ $separator }}
        </div>
    @endif
</div>
