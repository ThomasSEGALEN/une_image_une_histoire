<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in as
                    @if (Auth::user()->role_id === \App\Models\Role::ADMIN)
                    Admin
                    @else
                    User
                    @endif
                    <div>
                        <a href="{{ route('dashboard.users.index') }}">Utilisateurs</a>
                        <a href="{{ route('dashboard.pictures.index') }}">Photos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>