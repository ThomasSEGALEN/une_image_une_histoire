<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Utilisateurs') }}
        </h2>
    </x-slot>
    <div class="my-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 overflow-auto">
                <a href="{{ route('admin.users.create') }}">
                    <x-primary-button>
                        {{ __('Créer un utilisateur') }}
                    </x-primary-button>
                </a>
                <x-auth-session-status class="my-4" :status="session('status')" />
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
                                    <a href="{{ route('admin.users.edit', $user) }}">
                                        <svg height="25" width="25" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                        </svg>
                                    </a>
                                    <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'user-delete')">
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
                    @endforeach
                </table>
                <div class="my-4">{{ $users->links() }}</div>
            </div>
        </div>
    </div>
    <x-modal name="user-delete" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('admin.users.destroy', $user) }}" class="p-6">
            @csrf
            @method('DELETE')
            <h2 class="text-lg font-medium text-gray-900">Êtes-vous sûr de vouloir supprimer ce compte ?</h2>
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
</x-app-layout>