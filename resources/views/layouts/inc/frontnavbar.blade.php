<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #6486ff">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">E-shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}"><ion-icon name="home-outline"></ion-icon> Home</a>
                <a class="nav-link" href="{{url('category')}}"><ion-icon name="bag-outline"></ion-icon> Categories</a>
                <a class="nav-link"  href="{{url('cart')}}"><ion-icon name="cart-outline"></ion-icon> Panier</a>
                <a class="nav-link"  href="{{url('wishlist')}}"><ion-icon name="cart-outline"></ion-icon> Wishlist</a>

            @guest
                    @if (Route::has('login'))
                            @auth
                            @can('admin')
                                <a class="nav-link" href="{{ url('/private') }}">Admin</a>
                            @endcan
                            @else
                                <a href="{{ route('login') }}" class="nav-link" >Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"  class="nav-link">Register</a>
                                @endif
                            @endauth
                    @endif
                @else
                    @auth
                        @if ( Auth::user()->role === 'admin')
                            <li><a class="nav-link" href="/private"><ion-icon name="person"></ion-icon> Admin</a></li>
                        @endif
                    @endauth
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" >
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2  text-sm leading-4 font-medium rounded-md text-white-50 dark:text-gray-400 bg-dark dark:bg-gray-800 hover:text-black dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ url('my-orders') }}" >
                                    mes commandes
                                </x-dropdown-link>


                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endguest
        </div>
    </div>
    </div>
</nav>
