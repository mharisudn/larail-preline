@props([
    'as' => 'button',
    'black' => false,
    'white' => false,
    'icon' => '',
])

@if($as === 'a')
    @if($black)
        <a {{ $attributes->merge(['class' => 'py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-zinc-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-black dark:hover:bg-zinc-200']) }}>
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" />
            @endif
            {{ $slot }}
        </a>
    @elseif($white)
        <a {{ $attributes->merge(['class' => 'py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-zinc-200 shadow-sm bg-white text-black hover:bg-zinc-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-black dark:hover:bg-zinc-200']) }}>
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" />
            @endif
            {{ $slot }}
        </a>
    @else
        <a {{ $attributes->merge(['class' => 'py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-black dark:text-white']) }}>
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" />
            @endif
            {{ $slot }}
        </a>
    @endif
@else
    @if($black)
        <button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent bg-black text-white hover:bg-zinc-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-black dark:hover:bg-zinc-200']) }}>
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" />
            @endif
            {{ $slot }}
        </button>
    @elseif($white)
        <button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-zinc-200 shadow-sm bg-white text-black hover:bg-zinc-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-black dark:hover:bg-zinc-200']) }}>
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" />
            @endif
            {{ $slot }}
        </button>
    @else
        <button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-md border border-transparent text-black dark:text-white']) }}>
            @if($icon)
                <x-dynamic-component :component="'icons.' . $icon" />
            @endif
            {{ $slot }}
        </button>
    @endif
@endif
