@extends('layouts.front')

@section('title')
    My cart
@endsection


@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Home
                </a> /
                <a href="{{ url('cart') }}">
                    cart
                </a> /

            </h6>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow product_data">
            @if($cartitems->count() > 0)
            <div class="card-body">
                @php $total = 0; @endphp
                @foreach($cartitems as $item)
                    <div class="row product_data ">
                        <div class="col-md-2 my-auto">
                            <img src="{{ asset('asset/uploids/products/'.$item->products->image) }}" height="70px" width="70px" alt="image">
                        </div>
                        <div class="col-md-3 my-auto">
                            <h6>{{ $item->products->name }}</h6>
                        </div>
                        <div class="col-md-2 my-auto">
                            <h6>{{ $item->products->selling_price }} Franc CFA</h6>
                        </div>
                        <div class="col-md-3 my-auto">
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            @if($item->products->qty >= $item->prod_qty)
                                <label for="Quantity">Quantite</label>
                                <div class="input-group text-center mb-3" style="width: 130px">
                                    <button class="input-group-text changeQty decrement-btn">-</button>
                                    <input type="text" name="quantity" value="{{ $item->prod_qty }}" class="form-control qty-input">
                                    <button class="input-group-text changeQty increment-btn">+</button>
                                </div>
                                @php $total += $item->products->selling_price * $item->prod_qty; @endphp
                            @else
                                <h6>fini en stock</h6>
                            @endif
                        </div>
                        <div class="col-md-2 my-auto">
                            <button class="btn btn-danger delete-cart-item"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                        </div>
                    </div>
                    @php $total += $item->products->selling_price * $item->prod_qty; @endphp
                @endforeach
            </div>

            <div class="card-footer">
                <h6>Prix Total: {{ $total }}</h6>
                <a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">Proceder au paiement</a>
            </div>
            @else
                <div class="card-body text-center">
                    <h2><ion-icon name="cart"></ion-icon>Votre panier est vide</h2>
                    <a href="{{ url('category') }}" class="btn btn-outline-primary float-end"><ion-icon name="cart"></ion-icon>Continuer vos achats</a>
                </div>
            @endif
        </div>

    </div>


@endsection

{{--@section('scripts')

    <script>
        $('.delete-cart-item').click(function (e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var prod_id = $(this).closest('.product_data').find('.prod_id').val();
            $.ajax({
                method: "POST",
                url: "delete-cart-item" ,
                data: {
                    'prod_id':prod_id,
                },
                success: function (response){
                    swal("",response.status, "Succes");
                }
            });

        });

    </script>

@endsection--}}

