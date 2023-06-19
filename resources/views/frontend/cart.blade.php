@extends('layouts.front')

@section('title')
    My cart
@endsection


@section('content')

    <div class="py-3 mb-4 shadow-sm border-top" style="background: #3586ff;">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Accueil
                </a> /
                <a href="{{ url('cart') }}">
                    Panier
                </a> /

            </h6>
        </div>
    </div>

    <div class="container my-5" style="background-color: #6486ff">
        <div class="card shadow product_data cartitems">
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

@section('scripts')

    <script>
        $(document).ready(function () {


            $('.increment-btn').click(function (e) {
                e.preventDefault();

                // var inc_value = $('.qty-input').val();
                var inc_value = $(this).closest('.product_data').find('.qty-input').val();
                var value = parseInt(inc_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10)
                {
                    value++;
                    $(this).closest('.product_data').find('.qty-input').val(value);

                }
            });

            $('.decrement-btn').click(function (e) {
                e.preventDefault();

                // var dec_value = $('.qty-input').val();
                var dec_value =$(this).closest('.product_data').find('.qty-input').val();
                var value = parseInt(dec_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1)
                {
                    value--;
                    // $('.qty-input').val(value);
                    $(this).closest('.product_data').find('.qty-input').val(value);

                }
            });

            $('.changeQty').click(function (e){
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var prod_id = $(this).closest('.product_data').find('.prod_id').val();
                var qty = $(this).closest('.product_data').find('.qty-input').val();

                data = {
                    '_token': '{{ csrf_token() }}',
                    'prod_id' : prod_id,
                    'prod_qty' : qty,
                }

                $.ajax({
                    method: "POST",
                    url: "/update-cart" ,
                    data: data,

                    success: function (response){
                        window.location.reload();
                    }
                });

            });

        });

    </script>

@endsection

