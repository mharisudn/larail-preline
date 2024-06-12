@props([
    'title' => '',
    'description' => '',
])

<div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
    <div>
        <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
            {{ $title }}
        </h2>
        <p class="text-sm text-gray-600 dark:text-neutral-400">
            {{ $description }}
        </p>
    </div>

    <div>
        {{ $actions }}
    </div>
</div>
