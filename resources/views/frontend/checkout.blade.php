@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ url('place-order') }} " method="POST">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Detail de base</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="">Nom</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="fname" placeholder="Entrer votre nom">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Prenom</label>
                                    <input type="text" class="form-control" name="lname" value="{{ Auth::user()->lname }}" placeholder="Entrer votre Prenom">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Mail</label>
                                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Entrer votre adresse mail">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Tel</label>
                                    <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" placeholder="Entrer votre numero de telephone">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Adresse1</label>
                                    <input type="text" class="form-control" name="address1" value="{{ Auth::user()->address1 }}" placeholder="Entrer votre premiere adresse">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Adresse2</label>
                                    <input type="text" class="form-control" name="address2" value="{{ Auth::user()->address2 }}" placeholder="Entrer votre seconde adresse si vous en avez">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Ville</label>
                                    <input type="text" class="form-control" name="city" value="{{ Auth::user()->city }}" placeholder="Entrer le nom de votre ville">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Quartier</label>
                                    <input type="text" class="form-control" name="state" value="{{ Auth::user()->state }}" placeholder="Entrer le nom de votre quartier">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Pays</label>
                                    <input type="text" class="form-control" name="country" value="{{ Auth::user()->country }}" value="{{ Auth::user()->state }}" placeholder="Entrer le nom de votre pays">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Code pin</label>
                                    <input type="text" class="form-control" name="pincode" value="{{ Auth::user()->pincode }}" placeholder="Entrer votre code pin">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Detail de la commande</h6>
                            <hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                <th>Produit</th>
                                <th>quantite</th>
                                <th>Prix unitaire</th>
                                </thead>
                                <tbody>
                                @foreach($cartitems as $item)
                                <tr>
                                    <td>{{ $item->products->name }}</td>
                                    <td>{{ $item->prod_qty }}</td>
                                    <td>{{ $item->products->selling_price }}</td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <hr>
                            <button type="submit" class="btn btn-primary float-end">Pace Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
