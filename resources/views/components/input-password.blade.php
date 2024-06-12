@props([
    'label' => '',
    'name' => '',
    'messages' => '',
])
<div class="relative">
    <input {{ $attributes->merge(['type' => 'password', 'id' => 'hs-toggle-password' ,'placeholder' => '','class' => 'peer px-4 pt-8 block w-full border-blue-600/50 rounded-lg text-sm placeholder:text-zinc-500 focus:border-blue-900 focus:ring focus:ring-offset-0 focus:ring-blue-500/50 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:bg-zinc-900 dark:focus:border-blue-200/50 dark:focus:ring dark:focus:ring-offset-0 dark:focus:ring-blue-600/50'. ($errors->has($name) ? ' text-red-600' : '')]) }}>
    <button type="button" data-hs-toggle-password='{
        "target": "#hs-toggle-password"
      }' class="absolute top-0 end-0 p-3.5 h-full rounded-e-md">
        <svg class="flex-shrink-0 size-3.5 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
            <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
            <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
            <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
        </svg>
    </button>
    <label class="absolute top-0 start-0 p-4 h-full text-sm font-medium truncate pointer-events-none border border-transparent origin-[0_0] scale-90 translate-x-0.5 -translate-y-1.5
      dark:text-zinc-300 dark:peer-focus:text-white
      peer-focus:text-black dark:peer-focus:text-white dark:text-white
      peer-disabled:opacity-50 peer-disabled:pointer-events-none {{ $errors->has($name) ? ' text-red-600 peer-focus:text-red-600' : ' text-zinc-500' }}">{{ $label }}</label>
</div>
@if ($messages)
    @foreach ((array) $messages as $message)
        <p class="text-sm text-red-600 mt-1">
            {{ $message }}
        </p>
    @endforeach
@endif
