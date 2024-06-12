<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('layouts.auth');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
};

?>

<div class="p-8">
    <div class="text-start tracking-tight">
        <h2 class="block text-xl font-bold text-black dark:text-white">Sign in</h2>
        <p class="text-sm text-zinc-500 dark:text-zinc-400">
            {{ __('Welcome back, enter your credentials to continue.') }}
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <!-- Google signin -->
    <div class="mt-5">
        <button type="button"
                class="w-full py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-zinc-800 shadow-sm hover:bg-zinc-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-black dark:hover:bg-zinc-200">
            <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                <path
                    d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z"
                    fill="#4285F4"/>
                <path
                    d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z"
                    fill="#34A853"/>
                <path
                    d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z"
                    fill="#FBBC05"/>
                <path
                    d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z"
                    fill="#EB4335"/>
            </svg>
            Sign in with Google
        </button>

        <div
            class="py-3 flex items-center text-xs text-zinc-400 uppercase before:flex-1 before:border-t before:border-zinc-200 before:me-6 after:flex-1 after:border-t after:border-zinc-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
            Or
        </div>

        <!-- Form -->
        <form wire:submit="login" novalidate>
            <div class="grid gap-y-4">
                <!-- Email Address -->
                <div>
                    <x-input-text wire:model="form.email" :label="__('Email')" type="email" name="form.email"
                                  :messages="$errors->get('form.email')" placeholder="jhon@gmail.com"/>
                </div>

                <!-- Password -->
                <div>
                    <x-input-password wire:model="form.password" :label="__('Password')" name="form.password"
                                      :messages="$errors->get('form.password')"/>
                </div>

                <!-- Checkbox -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                               class="peer size-4 shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800 mr-2">
                        <label for="remember-me" class="text-sm text-zinc-500 dark:text-white">Remember me</label>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="underline text-sm font-medium text-blue-600 hover:text-blue-600 rounded-md dark:text-blue-500"
                           href="{{ route('password.request') }}" wire:navigate>
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <x-button black>Sign in</x-button>

            </div>
        </form>
    </div>
</div>
