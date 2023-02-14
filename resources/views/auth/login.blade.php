<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="flex justify-center text-xl font-bold text-dark">Connexion</h1>
            <div class="mt-6">
                <x-input-label for="email" :value="__('Adresse e-mail')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                <x-input-error :messages="$errors->get('login')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md"
                    href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>
                @endif
                <x-primary-button class="ml-3">
                    {{ __('Se connecter') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>