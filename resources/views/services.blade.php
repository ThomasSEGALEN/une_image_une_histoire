<x-app-layout>
    <div class="p-12 space-y-8">
        <div class="mx-auto md:flex md:justify-center">
            <div class="flex flex-col-reverse rounded-lg bg-white shadow-lg md:max-w-4xl md:flex-row">
                <div class="flex flex-col justify-between p-6">
                    <div>
                        <h5 class="mb-2 text-xl font-medium text-neutral-800">
                            Mariage
                        </h5>

                        <p class="mb-4 text-base text-neutral-600">
                            Un moyen d'immortaliser un moment unique dans une vie.
                        </p>
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('home').'/#contact' }}" class="inline-flex items-center px-4 py-2 bg-dark border
                        border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gold
                        active:bg-gold
                        transition ease-in-out duration-150'">Voir plus</a>
                    </div>
                </div>

                <img class="h-96 w-full object-cover rounded-t-lg md:max-w-xs md:h-64 md:rounded-none md:rounded-r-lg"
                    src="{{url('assets/images/prestation1.png')}}" alt="Mairage" />
            </div>
        </div>

        <div class="mx-auto md:flex md:justify-center">
            <div class="flex flex-col rounded-lg bg-white shadow-lg md:max-w-4xl md:flex-row">
                <img class="h-96 w-full object-cover rounded-t-lg md:max-w-xs md:h-64 md:rounded-none md:rounded-l-lg"
                    src="{{url('assets/images/prestation2.png')}}" alt="Portrait" />

                <div class="flex flex-col justify-between p-6">
                    <div>
                        <h5 class="mb-2 text-xl font-medium text-neutral-800">
                            Portrait
                        </h5>

                        <p class="mb-4 text-base text-neutral-600">
                            Bien plus qu'un instant, nous captons votre sensibilité.
                        </p>
                    </div>

                    <div class="flex justify-end">
                        <a href="{{ route('home').'/#contact' }}" class="inline-flex items-center px-4 py-2 bg-dark border
                        border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gold
                        active:bg-gold
                        transition ease-in-out duration-150'">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto md:flex md:justify-center">
            <div class="flex flex-col-reverse rounded-lg bg-white shadow-lg md:flex-row">
                <div class="flex flex-col justify-between p-6">
                    <div>
                        <h5 class="mb-2 text-xl font-medium text-neutral-800">
                            Shooting
                        </h5>

                        <p class="mb-4 text-base text-neutral-600">
                            Des séances de shootings personnalisées selon vous.
                        </p>
                    </div>


                    <div class="flex justify-end">
                        <a href="{{ route('home').'/#contact' }}" class="inline-flex items-center px-4 py-2 bg-dark border
                        border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gold
                        active:bg-gold
                        transition ease-in-out duration-150'">Voir plus</a>
                    </div>
                </div>

                <img class="h-96 w-full object-cover rounded-t-lg md:max-w-xs md:h-64 md:rounded-none md:rounded-r-lg"
                    src="{{url('assets/images/prestation3.png')}}" alt="Shooting" />
            </div>
        </div>
    </div>
</x-app-layout>