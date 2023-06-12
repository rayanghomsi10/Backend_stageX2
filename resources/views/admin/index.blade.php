@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Lab2view</h1>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"><ion-icon name="copy-outline"></ion-icon></i>
                            </div>
                            <p class="card-category">Nombre d'utilisateur</p>
                            <h3 class="card-title">{{ $usersCount }}
                                <small></small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-twitter"><ion-icon name="cart-outline"></ion-icon></i>
                            </div>
                            <p class="card-category">Nombre d'administrateur</p>
                            <h3 class="card-title">{{ $adminCount }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"><ion-icon name="cash-outline"></ion-icon></i>
                            </div>
                            <p class="card-category">Revenue</p>
                            <h3 class="card-title">{{ $totalPrice }} Fcfa</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"><ion-icon name="cart-outline"></ion-icon></i>
                            </div>
                            <p class="card-category">Commande en attente</p>
                            <h3 class="card-title">{{ $order }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-primary card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-twitter"><ion-icon name="cart-outline"></ion-icon></i>
                            </div>
                            <p class="card-category">Commandes livrer</p>
                            <h3 class="card-title">{{ $order_complete }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-twitter"><ion-icon name="cart-outline"></ion-icon></i>
                            </div>
                            <p class="card-category">Nombre de produit</p>
                            <h3 class="card-title">{{ $productno }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-dange card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"><ion-icon name="cart-outline"></ion-icon></i>
                            </div>
                            <p class="card-category"><strong>Nombre de categorie</strong></p>
                            <h3 class="card-title">{{ $catno }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Produit tendance</h4>
            </div>
            <div class="card-body">
                <table class="table-bordered table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Selling price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($product as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->selling_price}}</td>
                            <td>{{$item->qty}}</td>
                            <td><img src="{{asset('./asset/uploids/products/'.$item->image)}}" alt="image" class="cate-image"> </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
