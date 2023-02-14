<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galerie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col md:grid grid-cols-8 grid-rows-8 gap-6">
                        <figure class="col-start-1 col-end-3 row-start-1 row-end-3">
                            <img src="{{asset('storage/pictures/dffssd.png')}}" alt="Gallery image 1"
                                class="block w-full h-full object-cover">
                        </figure>
                        <figure class="col-start-3 col-end-5 row-start-1 row-end-3">
                            <img src="{{asset('storage/pictures/dffssd.png')}}" alt="Gallery image 2"
                                class="block w-full h-full object-cover">
                        </figure>
                        <figure class="col-start-5 col-end-9 row-start-1 row-end-6">
                            <img src="{{asset('storage/pictures/dffssd.png')}}" alt="Gallery image 3"
                                class="block w-full h-full object-cover">
                        </figure>
                        <figure class="col-start-1 col-end-5 row-start-3 row-end-6">
                            <img src="{{asset('storage/pictures/dffssd.png')}}" alt="Gallery image 4"
                                class="block w-full h-full object-cover">
                        </figure>
                        <figure class="col-start-1 col-end-5 row-start-6 row-end-9">
                            <img src="{{asset('storage/pictures/dffssd.png')}}" alt="Gallery image 5"
                                class="block w-full h-full object-cover">
                        </figure>
                        <figure class="col-start-5 col-end-7 row-start-6 row-end-9">
                            <img src="{{asset('storage/pictures/dffssd.png')}}" alt="Gallery image 1"
                                class="block w-full h-full object-cover">
                        </figure>
                        <figure class="col-start-7 col-end-9 row-start-6 row-end-9">
                            <img src="{{asset('storage/pictures/dffssd.png')}}" alt="Gallery image 2"
                                class="block w-full h-full object-cover">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>