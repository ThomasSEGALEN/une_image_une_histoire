<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <a href="{{ route('dashboard.users.index') }}" class="inline-flex justify-center items-center mr-2">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Créer un utilisateur') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-session-status class="inline-block bg-red-100 text-red-700 py-2 px-4 rounded mb-2"
                        :status="session('error')" />
                    <x-auth-session-status class="inline-block bg-green-100 text-green-700 py-2 px-4 rounded mb-2"
                        :status="session('status')" />

                    <form method="POST" action="{{ route('dashboard.users.store') }}">
                        @csrf
                        <div class="flex flex-col md:flex-row md:space-x-4">
                            <div class="w-full md:w-1/2">
                                <x-input-label for="lastname" :value="__('Nom')" />
                                <x-text-input id="lastname" class="block w-full mt-1" type="text" name="lastname"
                                    :value="old('lastname')" required autofocus />
                                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                            </div>

                            <div class="w-full md:w-1/2 mt-4 md:mt-0">
                                <x-input-label for="firstname" :value="__('Prénom')" />
                                <x-text-input id="firstname" class="block w-full mt-1" type="text" name="firstname"
                                    :value="old('firstname')" required />
                                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex flex-col mt-4">
                            <x-input-label for="email" :value="__('Adresse e-mail')" />
                            <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                                :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex flex-col mt-4">
                            <x-input-label for="password" :value="__('Mot de passe')" />
                            <x-text-input id="password" class="block w-full mt-1" type="password" name="password"
                                required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex flex-col mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmation du mot de passe')" />
                            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                                name="password_confirmation" required />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex flex-col mt-4">
                            <x-input-label for="role" :value="__('Rôles')" />
                            @foreach ($roles as $role)
                            <div class="flex items-center space-x-2">
                                <input class='rounded border-gray-300 text-gold shadow-sm focus:ring-gold'
                                    id="roleInput-{{ $role->id }}" type="radio" name="role" value="{{ $role->id }}"
                                    @if($role->id === \App\Models\Role::USER ) checked @endif
                                >
                                <label class="form-check-label inline-block text-gray-800"
                                    for="roleInput-{{ $role->id }}">
                                    {{ $role->name }}
                                </label>
                            </div>
                            @endforeach
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>

                        <div class="mt-4 flex justify-end">
                            <a href="{{ route('dashboard.users.index') }}">
                                <x-secondary-button>
                                    {{ __('Annuler') }}
                                </x-secondary-button>
                            </a>
                            <x-primary-button class="ml-3">
                                {{ __('Créer') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>