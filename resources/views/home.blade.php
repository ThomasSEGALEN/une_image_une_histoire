<x-app-layout>
    <section id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
        <div class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
            data-te-carousel-indicators>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 3"></button>
        </div>
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" class="block w-full" alt="..." />
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">Dans quelques années, lorsque vous regarderez cette photo, vous sentirez le
                        soleil d'aujourd'hui sur votre visage.l</h5>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg" class="block w-full" alt="..." />
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">Nous sommes plus qu'un studio, nous sommes une famille.</h5>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item style="backface-visibility: hidden">
                <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg" class="block w-full" alt="..." />
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">Chaque client est unique, c'est pourquoi nous personnalisons chacun de nos
                        services car une image c'est le souvenir d'une vie.</h5>
                </div>
            </div>
        </div>
        <button
            class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <button
            class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
    </section>

    <section class="my-6 text-gray-800">
        <div class="p-12 flex flex-wrap">
            <div class="grow-0 shrink-0 basis-auto mb-6 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                <h2 class="text-3xl font-bold mb-6">Nous contacter</h2>
                <p class="text-gray-500 mb-6">
                    Envoyez-nous vos questions et nous vous apporterons l'aide dont vous avez besoin.
                </p>
                <p class="text-gray-500 mb-2">Angers, 49000, France</p>
                <p class="text-gray-500 mb-2">+33 6 23 56 89 19</p>
                <p class="text-gray-500 mb-2">contact@uiuh.com</p>
            </div>
            <div class="grow-0 shrink-0 basis-auto mb-12 md:mb-0 w-full md:w-6/12 px-3 lg:px-6">
                <form method="POST" action="{{ route('contact') }}">
                    @csrf
                    <div class=" form-group mb-6">
                        <x-text-input placeholder="Nom" id="name" class="block mt-1 w-full" type="text" name="name"
                            required autocomplete="name" value="{{old('name')}}" />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="form-group mb-6">
                        <x-text-input placeholder="Adresse e-mail" id="email" class="block mt-1 w-full" type="text"
                            name="email" required autocomplete="email" value="{{old('email')}}" />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="form-group mb-6">
                        <select class="border-gray-300 focus:border-gold
                            focus:ring-gold rounded-md shadow-sm w-full" name="reason" required>
                            <option value="0" disabled selected>Par quel type de séance êtes-vous intéressé ?</option>
                            <option value="Mariage" {{ old('reason')=='Mariage' ? 'selected' : '' }}>Mariage</option>
                            <option value="Famille" {{ old('reason')=='Famille' ? 'selected' : '' }}>Famille</option>
                            <option value="Enfant" {{ old('reason')=='Enfant' ? 'selected' : '' }}>Enfant</option>
                            <option value="Portrait" {{ old('reason')=='Portrait' ? 'selected' : '' }}>Portrait</option>
                            <option value="Couple" {{ old('reason')=='Couple' ? 'selected' : '' }}>Couple</option>
                            <option value="Événement" {{ old('reason')=='Événement' ? 'selected' : '' }}>Événement
                            </option>
                            <option value="Scolaire" {{ old('reason')=='Scolaire' ? 'selected' : '' }}>Scolaire</option>
                            <option value="Pro" {{ old('reason')=='Pro' ? 'selected' : '' }}>Pro</option>
                            <option value="Clip" {{ old('reason')=='Clip' ? 'selected' : '' }}>Clip</option>
                            <option value="Autre" {{ old('reason')=='Autre' ? 'selected' : '' }}>Autre</option>
                        </select>

                        <x-input-error :messages="$errors->get('reason')" class="mt-2" />
                    </div>
                    <div class="form-group mb-6">
                        <select class="border-gray-300 focus:border-gold
                            focus:ring-gold rounded-md shadow-sm w-full" name="how" required>
                            <option value="0" disabled selected>Comment avez-vous entendu parler de moi ?</option>
                            <option value="Bouche à oreille" {{ old('how')=='Bouche à oreille' ? 'selected' : '' }}>
                                Bouche à oreille</option>
                            <option value="Recherche internet" {{ old('how')=='Recherche internet' ? 'selected' : '' }}>
                                Recherche internet</option>
                            <option value="Réseaux sociaux" {{ old('how')=='Réseaux sociaux' ? 'selected' : '' }}>
                                Réseaux sociaux</option>
                            <option value="Recommandations" {{ old('how')=='Recommandations' ? 'selected' : '' }}>
                                Recommandations</option>
                            <option value="Autre" {{ old('how')=='Autre' ? 'selected' : '' }}>Autre</option>
                        </select>

                        <x-input-error :messages="$errors->get('how')" class="mt-2" />
                    </div>
                    <div class="form-group mb-6">
                        <x-textarea placeholder="Message" id="message" class="block w-full mt-1" name="message"
                            rows="5">
                        </x-textarea>

                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>
                    <div class="w-full flex justify-end">
                        <x-primary-button>
                            {{ __('Envoyer') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{--
    <section class="my-12 text-gray-800 text-center">
        <div class="p-12 mx-auto max-w-5xl">
            <div class="flex flex-col rounded-lg shadow-lg p-12">
                <h2 class="text-3xl font-bold mb-12">Nous contacter</h2>
                <form method="POST" action="{{ route('contact') }}">
                    @csrf
                    <div class=" form-group mb-6">
                        <x-text-input placeholder="Nom" id="name" class="block mt-1 w-full" type="text" name="name"
                            required autocomplete="name" />
                    </div>
                    <div class="form-group mb-6">
                        <x-text-input placeholder="Adresse e-mail" id="email" class="block mt-1 w-full" type="text"
                            name="email" required autocomplete="email" />
                    </div>
                    <div class="form-group mb-6">
                        <x-textarea placeholder="Message" id="message" class="block w-full mt-1" name="message"
                            rows="5">
                        </x-textarea>
                    </div>
                    <div class="w-full flex justify-end">
                        <x-primary-button>
                            {{ __('Envoyer') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section> --}}
</x-app-layout>