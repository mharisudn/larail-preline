@props([
    'icon' => '',
    'separator' => '',
    ])

@if($separator)
    <div role="separator" aria-orientation="horizontal" class="-mx-1 my-1 h-px bg-muted"></div>
@endif
<a {{ $attributes->merge(['class' => 'flex items-center gap-x-2 py-2 px-1.5 rounded-md hover:bg-muted text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50']) }}>
    @if($icon)
        <x-dynamic-component :component="'icons.' . $icon"/>
    @endif
    {{ $slot }}
</a>
