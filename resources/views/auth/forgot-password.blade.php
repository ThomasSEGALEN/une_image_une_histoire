<x-guest-layout>
    <x-auth-card>
        <h1 class="flex justify-center text-xl font-bold text-dark">Mot de passe oublié</h1>
        <div class="mt-6 mb-4 text-sm text-gray-600">
            {{ __("Vous avez oublié votre mot de passe ? Indiquez-nous votre adresse
            mail et nous vous enverrons un lien de réinitialisation du mot de passe si vous avez un compte associé à
            cette adresse e-mail.") }}
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div>
                <x-input-label for="email" :value="__('Adresse e-mail')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Envoyer') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>