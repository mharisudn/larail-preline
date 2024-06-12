@props([
    'label' => '',
    'icon' => '',
    'href' => '',
    'activeRoutes' => [],
])

@php
    $isActive = request()->fullUrlIs(url($href)) || request()->routeIs($activeRoutes);
@endphp

<li class="hs-accordion {{ $isActive ? 'active' : '' }} ">
    <a {{ $attributes }}
            class="{{ $isActive ? 'bg-muted text-primary hover:text-primary dark:text-white dark:bg-muted' : 'text-primary hover:bg-accent hover:text-accent-foreground dark:text-white dark:hover:bg-muted' }} hs-accordion-toggle w-full text-start text-sm font-medium flex items-center gap-x-4 py-2 px-3 rounded-md cursor-pointer">
        @if($icon)
            <x-dynamic-component :component="'icons.' . $icon"/>
        @endif

        {{ $label }}

        <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6"/>
        </svg>

        <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg"
             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
             stroke-linecap="round" stroke-linejoin="round">
            <path d="m6 9 6 6 6-6"/>
        </svg>
    </a>

    <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden ps-4 pt-2" style="{{ $isActive ? 'display:block' : 'display:hidden' }}">
        <ul class="ps-3 border-s-2 border-input" data-hs-accordion-always-open="true">
            <li>
                {{ $slot }}
            </li>
        </ul>
    </div>
</li>
