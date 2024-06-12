<?php

use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.auth');

state(['email' => '']);

rules(['email' => ['required', 'string', 'email']]);

$sendPasswordResetLink = function () {
    $this->validate();

    // We will send the password reset link to this user. Once we have attempted
    // to send the link, we will examine the response then see the message we
    // need to show to the user. Finally, we'll send out a proper response.
    $status = Password::sendResetLink(
        $this->only('email')
    );

    if ($status != Password::RESET_LINK_SENT) {
        $this->addError('email', __($status));

        return;
    }

    $this->reset('email');

    Session::flash('status', __($status));
};

?>

<div class="p-8">
    <div class="text-start tracking-tight">
        <h2 class="block text-xl font-bold text-black dark:text-white">{{ __('Forgot Password') }}</h2>
        <p class="text-sm text-zinc-500 dark:text-zinc-400 mb-8">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form wire:submit="sendPasswordResetLink">
        <!-- Email Address -->
        <div>
            <x-input-text wire:model="email" :label="__('Email')" id="email" type="email" name="email"
                          :messages="$errors->get('email')" required autofocus/>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div>
                <x-button as="a" white href="{{ route('login') }}">{{ __('Cancel') }}</x-button>
            </div>
            <x-button black>
                {{ __('Email Password Reset Link') }}
            </x-button>
        </div>
    </form>
</div>
