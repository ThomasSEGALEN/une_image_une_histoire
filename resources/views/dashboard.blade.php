<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="flex justify-center p-12">
        <div class="flex flex-col space-y-6 md:flex-row md:space-x-6 md:space-y-0 text-gray-900">
            <div class="block max-w-sm rounded-lg bg-white shadow-lg">
                <div class="p-6">
                    <div class="inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20">
                            <path
                                d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                        </svg>

                        <h5 class="mb-4 ml-2 text-xl font-medium leading-tight text-neutral-800">
                            <a href="{{ route('dashboard.users.index') }}">Utilisateurs</a>
                        </h5>
                    </div>

                    <p class="mb-4 text-base text-neutral-600">
                        Accéder à la gestion des <a class="underline"
                            href="{{ route('dashboard.users.index') }}">utilisateurs</a>.
                    </p>
                </div>
            </div>

            <div class="block max-w-sm rounded-lg bg-white shadow-lg">
                <div class="p-6">
                    <div class="inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20">
                            <path
                                d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
                        </svg>

                        <h5 class="mb-4 ml-2 text-xl font-medium leading-tight text-neutral-800">
                            <a href="{{ route('dashboard.pictures.index') }}">Images</a>
                        </h5>
                    </div>

                    <p class="mb-4 text-base text-neutral-600">
                        Accéder à la gestion des <a class="underline"
                            href="{{ route('dashboard.pictures.index') }}">images</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>