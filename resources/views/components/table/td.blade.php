@props([
    'image' => '',
    'title' => '',
    'subtitle' => '',
    'checkbox' => false,
    'rows' => false,
    'rows2' => false,
    'rows3' => false,
    'icon' => false,
    'actions' => false,
    'src' => '',
])

<td {{ $attributes->merge(['class' => 'size-px whitespace-nowrap']) }}>
    @if($rows)
        <div {{ $attributes->merge(['class' => 'px-6 py-3']) }}>
            <span class="text-sm text-gray-600 dark:text-neutral-400">{{ $slot }}</span>
        </div>
    @elseif($rows2)
        <div {{ $attributes->merge(['class' => 'px-6 py-3']) }}>
            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $title }}</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500">{{ $subtitle }}</span>
        </div>
    @elseif($rows3)
        <div {{ $attributes->merge(['class' => 'ps-6 lg:ps-3 pe-6 py-3']) }}>
            <div class="flex items-center gap-x-3">
                <img {{ $attributes->merge(['class' => 'inline-block size-[38px] rounded-full']) }}
                     src="{{ $image }}">
                <div class="grow">
                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $title }}</span>
                    <span class="block text-sm text-gray-500 dark:text-neutral-500">{{ $subtitle }}</span>
                </div>
            </div>
        </div>
    @elseif($icon)
        <div class="px-6 py-3">
            <span
                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                <x-dynamic-component :component="'icons.' . $icon"/>
                {{ $slot }}
            </span>
        </div>
    @elseif($actions)
        <div class="px-6 py-1.5">
            <div class="hs-dropdown [--placement:bottom-right] relative inline-block">
                <button id="hs-table-dropdown-6" type="button"
                        class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-lg text-gray-700 align-middle disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1"/>
                        <circle cx="19" cy="12" r="1"/>
                        <circle cx="5" cy="12" r="1"/>
                    </svg>
                </button>
                {{ $trigger }}
            </div>
        </div>
    @endif
</td>
