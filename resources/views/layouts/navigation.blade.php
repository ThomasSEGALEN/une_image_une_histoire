<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                @if (Auth::check() && Auth::user()->role_id === App\Models\Role::ADMIN)
                <div class="hidden space-x-8 sm:-my-px  sm:flex">
                    <x-nav-link :href="route('dashboard')"
                        :active="request()->routeIs('dashboard') || request()->routeIs('dashboard.*')">
                        {{ __('Tableau de bord') }}
                    </x-nav-link>
                </div>
                @endif
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Accueil') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                        {{ __('Prestations') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                        {{ __('Galerie') }}
                    </x-nav-link>
                </div>
            </div>
            <div class="hidden  sm:flex sm:items-center ">
                @if (Auth::check())
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ ucfirst(Auth::user()->firstname) }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.show')">
                            {{ __('Profil') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Se déconnecter') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                <div class="hidden space-x-4 sm:flex">
                    <a href="{{ route('login') }}">
                        <x-secondary-button>
                            {{ __('Connexion') }}
                        </x-secondary-button>
                    </a>
                    <a href="{{ route('register') }}">
                        <x-primary-button>
                            {{ __('Inscription') }}
                        </x-primary-button>
                    </a>
                </div>
                @endif
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        @if (Auth::check() && Auth::user()->role_id)
        <div class="pt-2">
            <x-responsive-nav-link :href="route('dashboard')"
                :active="request()->routeIs('dashboard') || request()->routeIs('dashboard.*')">
                {{ __('Tableau de bord') }}
            </x-responsive-nav-link>
        </div>
        @endif
        <div class="pt-2">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Accueil') }}
            </x-responsive-nav-link>
        </div>
        <div class="pt-2">
            <x-responsive-nav-link :href="route('services')" :active="request()->routeIs('services')">
                {{ __('Prestations') }}
            </x-responsive-nav-link>
        </div>
        <div class="py-2">
            <x-responsive-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')">
                {{ __('Galerie') }}
            </x-responsive-nav-link>
        </div>
        @if (!Auth::check())
        <div class="py-2 border-t border-gray-200">
            <x-responsive-nav-link :href="route('login')">
                {{ __('Connexion') }}
            </x-responsive-nav-link>
        </div>
        <div class="py-2">
            <x-responsive-nav-link :href=" route('register')">
                {{ __('Inscription') }}
            </x-responsive-nav-link>
        </div>
        @else
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->firstname }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.show')">
                    {{ __('Profil') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Se déconnecter') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endif
    </div>
</nav>