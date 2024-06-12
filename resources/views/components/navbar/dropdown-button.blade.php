@props(['separator' => ''])
<div class="hs-dropdown [--placement:bottom-right] relative inline-flex ">
    <button id="hs-dropdown-with-header" type="button"
            class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
        <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-neutral-800"
             src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
             alt="Image Description">
    </button>

    <div
        class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 rounded-md border border-input bg-popover p-1 text-popover-foreground shadow-md"
        aria-labelledby="hs-dropdown-with-header">
        {{ $trigger }}
{{--        <div role="separator" aria-orientation="horizontal" class="-mx-1 mb-1 h-px bg-muted"></div>--}}
        {{ $slot }}
    </div>
</div>
