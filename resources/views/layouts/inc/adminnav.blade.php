<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/private') }}">
                        <i class="material-icons"><ion-icon name="today-outline"></ion-icon></i>
                        <p class="d-lg-none d-md-block">
                            Stats
                        </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('/') }}" >
                        <i class="material-icons"><ion-icon name="home-outline"></ion-icon></i>
                        <p class="d-lg-none d-md-block">
                            Some Actions
                        </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" >
                        <i class="material-icons"><ion-icon name="person-outline"></ion-icon></i>
                        <p class="d-lg-none d-md-block">
                            Account
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <x-dropdown-link  :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <div class="dropdown-divider"></div>
                            <!-- Authentication -->
                            <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<script src="{{asset('admin/js/jquery.min.js')}}" ></script>
<script src="{{asset('admin/js/popper.min.js')}}" ></script>
<script src="{{asset('admin/js/bootstrap-material-design.min.js')}}" ></script>
<script src="{{asset('admin/js/perfect-scrollbar.jquery.min.js')}}" ></script>
@yield('script')

