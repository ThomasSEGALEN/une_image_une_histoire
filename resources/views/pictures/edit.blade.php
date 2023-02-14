<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <a href="{{ route('dashboard.pictures.index') }}" class="inline-flex justify-center items-center mr-2">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Modifier une image') }}
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

                    <form id="pictureForm" action="{{ route('dashboard.pictures.update', $picture) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="w-full flex flex-row justify-between">
                            <div class="flex flex-col w-full -mx-3">
                                <div class="w-full px-3 mb-3">
                                    <x-input-label for="title" :value="__('Titre')" />
                                    <x-text-input id="title" class="block w-full mt-1" type="text" name="title"
                                        :value="$picture->title" required />
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex flex-row justify-between">
                            <div class="flex flex-col w-full -mx-3">
                                <div class="w-full px-3 mb-3">
                                    <x-input-label for="description" :value="__('Description')" />
                                    <x-textarea id="description" class="block w-full mt-1" name="description" rows="5">
                                        {{ $picture->description }}</x-textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="w-full flex flex-row justify-between">
                            <div class="flex flex-col w-full -mx-3">
                                <div class="w-full px-3 mb-3">
                                    <x-input-label for="picture" :value="__('Image')" />
                                    <input type="file" id="picture" name="picture" class="block w-full mt-1 focus:border-gold
                                    focus:ring-gold" required>
                                    <x-input-error :messages="$errors->get('picture')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-end space-x-2">
                            <a href="{{ route('dashboard.pictures.index') }}">
                                <x-secondary-button>
                                    {{ __('Annuler') }}
                                </x-secondary-button>
                            </a>
                            <x-primary-button>
                                {{ __('Ajouter') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>