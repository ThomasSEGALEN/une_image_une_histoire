<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Images') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-auto">
                    <div class="inline-flex flex-col">
                        <x-auth-session-status class="inline-block bg-green-100 text-green-700 py-2 px-4 rounded mb-2"
                            :status="session('status')" />

                        <a href="{{ route('dashboard.pictures.create') }}">
                            <x-primary-button>
                                {{ __('Ajouter une image') }}
                            </x-primary-button>
                        </a>
                    </div>

                    @if (!$pictures->isEmpty())
                    <div class="container my-2 mx-auto">
                        <div class="flex flex-wrap lg:-mx-4">
                            @foreach ($pictures->sortByDesc('updated_at') as $picture)
                            <div class="w-full md:w-1/2 my-4 px-0 md:px-4 lg:w-1/3">
                                <article class="overflow-hidden rounded-lg shadow-lg">
                                    <a href="{{ route('dashboard.pictures.edit', $picture) }}">
                                        <img class="block h-auto w-full" src="{{asset('storage/'.$picture->path)}}"
                                            alt="Image" />
                                    </a>

                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <a class="no-underline hover:underline text-black"
                                                href="{{ route('dashboard.pictures.edit', $picture) }}">
                                                {{ $picture->title }}
                                            </a>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            {{ date('d/m/Y', strtotime($picture->created_at)) }}
                                        </p>
                                    </header>

                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <p class="text-sm">
                                            {{ ucfirst($picture->user->firstname) }}
                                            {{ ucfirst($picture->user->lastname) }}
                                        </p>

                                        <button x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'picture-delete-{{$picture->id}}')">
                                            <svg height="20" width="20" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path
                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                            </svg>
                                        </button>
                                    </footer>
                                </article>
                            </div>

                            <x-modal name="picture-delete-{{$picture->id}}" focusable>
                                <form method="POST" action="{{ route('dashboard.pictures.destroy', $picture) }}">
                                    @csrf
                                    @method('DELETE')
                                    <h2 class="text-lg font-medium text-gray-900">Êtes-vous sûr de vouloir supprimer ce
                                        compte ?
                                    </h2>
                                    <p class="mt-1 text-sm text-gray-600">
                                        {{ __('Une fois que ce compte est supprimé, toutes ses données seront
                                        définitivement
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
                        </div>
                    </div>
                    @else
                    <div class="my-4">Vous n'avez pas d'images dans votre galerie actuellement.</div>
                    @endif
                    <div class="m-8">{{ $pictures->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>