<x-guest-layout>
    <x-auth-card>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="flex justify-center text-xl font-bold text-dark">Inscription</h1>
            <div class="flex space-x-6 mt-6">
                <div>
                    <x-input-label for="lastname" :value="__('Nom')" />
                    <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname"
                        :value="old('lastname')" required autofocus />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="firstname" :value="__('Prénom')" />
                    <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname"
                        :value="old('firstname')" required />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>
            </div>
            <div class="mt-4">
                <x-input-label for="email" :value="__('Adresse e-mail')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmation du mot de passe')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div>
                <div class="block mt-4">
                    <label for="terms_of_use" class="inline-flex items-center">
                        <x-checkbox-input id="terms_of_use" required />
                        <span class="text-sm text-gray-600 hover:text-gray-900 rounded-md ml-2">
                            J'accepte les
                            <a class=" underline hover:cursor-pointer" href="{{ route('tos') }}">{{
                                __("Conditions Générales d'Utilisation") }}</a></span>
                    </label>
                </div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md" href="{{ route('login') }}">
                    {{ __('Déjà un compte ?') }}
                </a>
                <x-primary-button class="ml-4">
                    {{ __("S'inscrire") }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>