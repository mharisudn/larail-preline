<?php

use App\Models\User;
use function Livewire\Volt\{layout, state, with, usesPagination};

layout('layouts.app');

usesPagination();

with(fn () => [
    'users' => User::paginate(10),
]);

?>

<div>
    <x-card.section>
        <x-card>
            <h1>Test</h1>
        </x-card>
    </x-card.section>

    <x-table.section>
        <x-table.card>
            <x-table.header>
                <x-slot name="title">Users</x-slot>
                <x-slot name="description">List of users</x-slot>

                <x-slot name="actions">
                    <x-button black as="a" href="" icon="plus">Add User</x-button>
                </x-slot>
            </x-table.header>

            <x-table>
                <x-table.thead>
                    <x-table.th-checkbox>
                        <x-input-checkbox/>
                    </x-table.th-checkbox>
                    <x-table.th>Name</x-table.th>
                    <x-table.th>Position</x-table.th>
                    <x-table.th>Status</x-table.th>
                    <x-table.th>Created</x-table.th>
                    <x-table.th></x-table.th>
                </x-table.thead>

                <x-table.tbody>
                    @foreach($users as $item)
                        <x-table.tr>
                            <x-table.td-checkbox>
                                <x-input-checkbox/>
                            </x-table.td-checkbox>
                            <x-table.td rows3>
                                <x-slot name="image">
                                    https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80
                                </x-slot>
                                <x-slot name="title">{{ $item->name }}</x-slot>
                                <x-slot name="subtitle">{{ $item->email }}</x-slot>
                            </x-table.td>
                            <x-table.td rows2>
                                <x-slot name="title">{{ $item->name }}</x-slot>
                                <x-slot name="subtitle">{{ $item->email }}</x-slot>
                            </x-table.td>
                            <x-table.td icon="active">
                                Active
                            </x-table.td>
                            <x-table.td rows>{{ $item->created_at }}</x-table.td>
                            <x-table.td actions>
                                <x-slot name="trigger">
                                    <x-table.actions>
                                        <x-table.link icon="edit">Edit</x-table.link>
                                        <x-table.link icon="eye">Show</x-table.link>
                                        <x-slot name="separator">
                                            <x-table.link class="text-red-600" icon="trash">Delete</x-table.link>
                                        </x-slot>
                                    </x-table.actions>
                                </x-slot>
                            </x-table.td>
                        </x-table.tr>
                    @endforeach
                </x-table.tbody>
            </x-table>

            <x-table.footer>
                <x-table.page/>
                <div>
                    {{ $users->links() }}
                </div>
            </x-table.footer>
        </x-table.card>
    </x-table.section>
</div>
