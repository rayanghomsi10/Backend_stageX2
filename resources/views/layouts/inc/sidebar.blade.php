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
            <li class="nav-item {{\Illuminate\Support\Facades\Request::is('private') ? 'active':'' }}  ">
                <a class="nav-link" href="/private">
                    <i class="material-icons"><ion-icon name="today-outline"></ion-icon></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('categories') ? 'active':'' }}">
                <a class="nav-link" href="{{url('categories')}}">
                    <i class="material-icons"><ion-icon name="person-outline"></ion-icon></i>
                    <p>Category</p>
                </a>
            </li>
            <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('add-category') ? 'active':'' }} ">
                <a class="nav-link" href="{{url('add-category')}}">
                    <i class="material-icons"><ion-icon name="person-outline"></ion-icon></i>
                    <p>add-Category</p>
                </a>
            </li>
            <li class="nav-item  {{ \Illuminate\Support\Facades\Request::is('products') ? 'active':'' }}">
                <a class="nav-link" href="{{url('products')}}">
                    <i class="material-icons"><ion-icon name="person-outline"></ion-icon></i>
                    <p>Products</p>
                </a>
            </li>
            <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('add-products') ? 'active':'' }} ">
                <a class="nav-link" href="{{url('add-products')}}">
                    <i class="material-icons"><ion-icon name="person-outline"></ion-icon></i>
                    <p>add-Products</p>
                </a>
            </li>
            <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('add-products') ? 'active':'' }} ">
                <a class="nav-link" href="{{url('orders')}}">
                    <i class="material-icons"><ion-icon name="person-outline"></ion-icon></i>
                    <p>Commandes</p>
                </a>
            </li>
            <li class="nav-item {{ \Illuminate\Support\Facades\Request::is('add-products') ? 'active':'' }} ">
                <a class="nav-link" href="{{url('users')}}">
                    <i class="material-icons"><ion-icon name="person-outline"></ion-icon></i>
                    <p>Users</p>
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
