<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
            E-shop
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="/private">
                    <i class="material-icons"><ion-icon name="today-outline"></ion-icon></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{url('categories')}}">
                    <i class="material-icons"><ion-icon name="person-outline"></ion-icon></i>
                    <p>Category</p>
                    <x-dropdown-link  :href="route('admin.category.add')">
                        {{ __('add-category') }}
                    </x-dropdown-link>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">
                    <i class="material-icons"><ion-icon name="clipboard-outline"></ion-icon></i>
                    <p>Table List</p>
                </a>
            </li>

        </ul>
    </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="{{asset('admin/js/jquery.min.js')}}" ></script>
<script src="{{asset('admin/js/popper.min.js')}}" ></script>
<script src="{{asset('admin/js/bootstrap-material-design.min.js')}}" ></script>
<script src="{{asset('admin/js/perfect-scrollbar.jquery.min.js')}}" ></script>
@yield('script')
