@extends('layouts.front')

@section('title')
    Mes Commandes
@endsection


@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Mes commandes
                            <a href="{{ url('my-orders') }}" class="btn btn-warning float-end">Retour</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Détail d'expédition</h4>
                                <hr>
                                <label for="">Nom</label>
                                <div class="border ">{{ $orders->fname }}</div>
                                <label for="">Prenom</label>
                                <div class="border ">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border ">{{ $orders->email }}</div>
                                <label for="">Numero</label>
                                <div class="border ">{{ $orders->phone }}</div>
                                <label for="">Adresse</label>
                                <div class="border ">
                                    {{ $orders->address1 }}<br>
                                    {{ $orders->address2 }}<br>
                                    {{ $orders->city }}<br>
                                    {{ $orders->state }}
                                    {{ $orders->country }}
                                </div>
                                <label for="">code</label>
                                <div class="border">{{ $orders->pincode }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Détail de commande</h4>
                                <hr>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Quantité</th>
                                        <th>Prix total</th>
                                        <th>Image</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders->orderitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td><img src="{{ asset('asset/uploids/products/'.$item->products->image) }}" width="50px" alt=""></td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                                <h4 class="px-2">Total : <span class="float-end">{{$orders->total_price}} Fcfa</span></h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
