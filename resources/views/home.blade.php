<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    {{-- Carousel --}}
    {{-- <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(123).jpg" class="block w-full" />
                    <div
                        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50">
                    </div>
                </div>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(124).jpg" class="block w-full" />
                    <div
                        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50">
                    </div>
                </div>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="block w-full" />
                    <div
                        class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed bg-black opacity-50">
                    </div>
                </div>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}


    {{-- Contact form --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-col justify-center space-x-12">
                        {{-- <div>
                            <x-input-label for="lastname" :value="__('Nom')" />

                            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" required
                                autocomplete="current-lastname" />

                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="firstname" :value="__('Prénom')" />

                            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" required
                                autocomplete="current-firstname" />

                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div> --}}
                        {{-- <div>
                            <textarea class=""></textarea>
                        </div> --}}

                        <form method="POST" action="{{ route('contact') }}" class="flex flex-col">
                            @csrf
                            <label for="email">Mail</label>
                            <input type="email" name="email" id="email" />
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            <button type="submit">Envoyer</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>