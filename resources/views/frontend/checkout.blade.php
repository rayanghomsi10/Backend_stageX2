@extends('layouts.front')

@section('title')
    Checkout
@endsection

{{--@section('content')

    <div class="py-3 mb-4 shadow-sm  border-top" style="background: #3586ff;">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Accueil
                </a> /
                <a href="{{ url('cart') }}">
                    Panier
                </a> /
                <a href="{{ url('orders') }}">
                    Validation de la commande
                </a> /
            </h6>
        </div>
    </div>

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
                                @php $total = 0; @endphp
                                @foreach($cartitems as $item)
                                <tr>
                                    <td>{{ $item->products->name }}</td>
                                    <td>{{ $item->prod_qty }}</td>
                                    <td>{{ $item->products->selling_price }} </td>
                                </tr>
                                </tbody>
                                @php $total += $item->products->selling_price * $item->prod_qty; @endphp
                                @endforeach
                            </table>
                            <br>
                            <h6>Prix Total: {{ $total }}</h6>
                            <hr>
                            <button type="submit" class="btn btn-primary mt-4 form-control">Passer la commande</button>
                            <button type="submit" class="btn btn-dark mt-4 form-control">Carte</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection--}}

@section('content')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    </head>
    <div class="py-3 mb-4 shadow-sm  border-top" style="background: #3586ff;">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Accueil
                </a> /
                <a href="{{ url('cart') }}">
                    Panier
                </a> /
                <a href="{{ url('orders') }}">
                    Validation de la commande
                </a> /
            </h6>
        </div>
    </div>

    <div class="container mt-5">
        <main>
            <form action="{{ url('place-order') }} " method="POST">
                {{ csrf_field() }}

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">

                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-dark">Detail de la commande</span>
                    </h4>
                    <ul class="list-group mb-3">
                        @php $total = 0; @endphp
                        @foreach($cartitems as $item)
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">{{ $item->products->name }}</h6>
                                <small class="text-muted">{{ $item->prod_qty }}</small>
                            </div>
                            <span class="text-muted">{{ $item->products->selling_price }} Fcfa</span>
                        </li>
                        @php $total += $item->products->selling_price * $item->prod_qty; @endphp

                        @endforeach
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total </span>
                            <strong>{{ $total }} Fcfa</strong>
                        </li>
                    </ul>
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Commander</button>


                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Detail</h4>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nom</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="fname" placeholder="Entrer votre nom">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Prenom</label>
                                <input type="text" class="form-control" name="lname" value="{{ Auth::user()->lname }}" placeholder="Entrer votre Prenom">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optionnel)</span></label>
                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Entrer votre adresse mail">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Telephone</label>
                                <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" placeholder="Entrer votre numero de telephone">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Code pin</label>
                                <input type="text" class="form-control" name="pincode" value="{{ Auth::user()->pincode }}" placeholder="Entrer votre code pin">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address1" value="{{ Auth::user()->address1 }}" placeholder="Entrer votre premiere adresse">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" name="address2" value="{{ Auth::user()->address2 }}" placeholder="Entrer votre seconde adresse si vous en avez">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="address2" class="form-label">Pays</label>
                                <input type="text" class="form-control" name="country" value="{{ Auth::user()->country }}" value="{{ Auth::user()->state }}" placeholder="Entrer le nom de votre pays">
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Ville</label>
                                <input type="text" class="form-control" name="city" value="{{ Auth::user()->city }}" placeholder="Entrer le nom de votre ville">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Quartier</label>
                                <input type="text" class="form-control" name="state" value="{{ Auth::user()->state }}" placeholder="Entrer le nom de votre quartier">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                        <hr class="my-4">


                        {{--<h4 class="mb-3">Payment</h4>

                        <div class="my-3">

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>--}}

                </div>
            </div>
            </form>
        </main>
@endsection

@section('script')
    <script>
        const form = document.querySelector('form');

        // Ajout d'un écouteur d'événement sur la soumission du formulaire
        form.addEventListener('submit', (event) => {
            // Récupération de tous les champs du formulaire
            const fields = form.querySelectorAll('input[type="text"]');

            // Vérification que tous les champs sont remplis
            let isFieldsFilled = true;
            fields.forEach((field) => {
                if (field.value.trim() === '') {
                    isFieldsFilled = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            // Si tous les champs sont remplis, on envoie le formulaire
            if (isFieldsFilled) {
                // Envoi du formulaire
                form.submit();
            } else {
                // Empêche l'envoi du formulaire
                event.preventDefault();
            }
        });
    </script>
@endsection

