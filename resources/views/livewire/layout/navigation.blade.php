<?php

use App\Livewire\Actions\Logout;

$logout = function (Logout $logout) {
    $logout();

    $this->redirect('/', navigate: true);
};

?>
<x-navbar>
    <x-navbar.logo/>
    <x-navbar.card>
        <x-navbar.button/>
        <x-navbar.search/>

        <x-navbar.card-dropdown>
            <x-navbar.switcher/>
            <x-navbar.notification class="mr-2"/>

            <x-navbar.dropdown-button>
                <x-slot:trigger>
                    <div class="py-1 first:pt-0 last:pb-0">
                        <div
                            class="py-3 px-5 flex items-center rounded-md hover:bg-muted outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                            <img class="inline-flex items-center mr-3 size-8 rounded-full"
                                 src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                 alt="Image Description">
                            <div class="flex flex-col">
                                <p class="text-sm font-semibold text-primary">{{ auth()->user()->name }}</p>
                                <p class="text-sm text-primary">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </x-slot:trigger>
                    <x-navbar.dropdown-link icon="user" :href="route('profile')" wire:navigate>Profile
                    </x-navbar.dropdown-link>
                    <x-navbar.dropdown-link separator icon="logout" wire:click="logout" class="cursor-pointer">Logout</x-navbar.dropdown-link>
            </x-navbar.dropdown-button>
        </x-navbar.card-dropdown>
    </x-navbar.card>
</x-navbar>
