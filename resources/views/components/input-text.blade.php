@props([
    'label' => '',
    'name' => '',
    'messages' => '',
])
<div class="relative">
    <input {{ $attributes->merge(['type' => 'text' ,'placeholder' => '','class' => 'peer px-4 pt-8 block w-full border-blue-600/50 rounded-lg text-sm placeholder:text-zinc-500 focus:border-blue-900 focus:ring focus:ring-offset-0 focus:ring-blue-500/50 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:bg-zinc-900 dark:focus:border-blue-200/50 dark:focus:ring dark:focus:ring-offset-0 dark:focus:ring-blue-600/50'. ($errors->has($name) ? ' text-red-600' : '')]) }}>
    <label class="absolute top-0 start-0 p-4 h-full text-sm font-medium truncate pointer-events-none border border-transparent origin-[0_0] scale-90 translate-x-0.5 -translate-y-1.5
      dark:text-zinc-300 dark:peer-focus:text-white
      peer-focus:text-black dark:peer-focus:text-white dark:text-white
      peer-disabled:opacity-50 peer-disabled:pointer-events-none {{ $errors->has($name) ? ' text-red-600 peer-focus:text-red-600' : ' text-zinc-500' }}">{{ $label }}</label>
</div>
@if ($messages)
    @foreach ((array) $messages as $message)
        <p class="text-sm text-red-600 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
                 class="mr-2 inline-block size-3.5">
                <path fill="currentColor" fill-rule="evenodd"
                      d="M8.809 3.982c1.466-2.37 4.913-2.37 6.379 0l6.367 10.296C23.1 16.776 21.303 20 18.365 20H5.632c-2.937 0-4.734-3.224-3.19-5.722L8.81 3.982ZM12 8a.75.75 0 0 1 .75.75v4a.75.75 0 1 1-1.5 0v-4A.75.75 0 0 1 12 8m1 7.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"
                      clip-rule="evenodd"></path>
            </svg>
            {{ $message }}
        </p>
    @endforeach
@endif
