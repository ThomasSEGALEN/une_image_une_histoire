<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <a href="{{ route('dashboard') }}" class="inline-flex justify-center items-center mr-2">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </a>

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Utilisateurs') }}
            </h2>
        </div>
    </x-slot>

    <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 overflow-auto">
                <x-auth-session-status class="inline-block bg-green-100 text-green-700 py-2 px-4 rounded"
                    :status="session('status')" />

                <div class="flex items-center justify-between">
                    <a href="{{ route('dashboard.users.create') }}">
                        <x-primary-button>
                            {{ __('Créer un utilisateur') }}
                        </x-primary-button>
                    </a>

                    <form class="flex items-center my-2" action="{{ route('dashboard.users.index') }}" method="GET">
                        <div class="relative">
                            <x-text-input type="text" class="block w-full mr-3" name="search" placeholder="Recherche" />

                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="submit">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        fill="#111827">
                                        <path
                                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                @if (!$users->isEmpty())
                <table class="min-w-full text-center my-6">
                    <thead class="border-b bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4">ID</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                            <th scope="col" class="px-6 py-4">Rôle</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead class="border-b">
                    @foreach ($users as $user)
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->role->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap flex justify-center">
                                <div class="flex space-x-6">
                                    <a href="{{ route('dashboard.users.edit', $user) }}">
                                        <svg height="25" width="25" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                        </svg>
                                    </a>

                                    <button x-data=""
                                        x-on:click.prevent="$dispatch('open-modal', 'user-delete-{{$user->id}}')">
                                        <svg height="25" width="25" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512">
                                            <path
                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr class="bg-white border-b">
                    </tbody>

                    <x-modal name="user-delete-{{$user->id}}" focusable>
                        <form method="POST" action="{{ route('dashboard.users.destroy', $user) }}">
                            @csrf
                            @method('DELETE')
                            <h2 class="text-lg font-medium text-gray-900">Êtes-vous sûr de vouloir supprimer ce
                                compte ?
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Une fois que ce compte est supprimé, toutes ses données seront définitivement
                                supprimées.') }}
                            </p>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Annuler') }}
                                </x-secondary-button>
                                <x-danger-button class="ml-3">
                                    {{ __('Supprimer') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                    @endforeach
                </table>
                <div class="mt-8">{{ $users->links() }}</div>
                @else
                <div class="mt-4">Vous n'avez pas d'utilisateurs actuellement.</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>