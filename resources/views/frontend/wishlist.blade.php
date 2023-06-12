@extends('layouts.front')

@section('title')
    My cart
@endsection


@section('content')

    <div class="py-3 mb-4 shadow-sm border-top" style="background: #3586ff;">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Home
                </a> /
                <a href="{{ url('wishlist') }}">
                    Wishlist
                </a> /

            </h6>
        </div>
    </div>

    <div class="container my-5" style="background-color: #6486ff">
        <div class="card shadow ">
            @if($wishlist->count() >0)
                <div class="card-body">
                    @foreach($wishlist as $item)
                        <div class="row product_data ">
                            <div class="col-md-2 my-auto">
                                <img src="{{ asset('asset/uploids/products/'.$item->products->image) }}" height="70px" width="70px" alt="image">
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>{{ $item->products->name }}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>{{ $item->products->selling_price }} Franc CFA</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                                @if($item->products->qty >= $item->prod_qty)
                                    <label for="Quantity">Quantite</label>
                                    <div class="input-group text-center mb-3" style="width: 130px">
                                        <button class="input-group-text  decrement-btn">-</button>
                                        <input type="text" name="quantity" value="1" class="form-control qty-input">
                                        <button class="input-group-text  increment-btn">+</button>
                                    </div>
                                @else
                                    <h6>fini en stock</h6>
                                @endif
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn addtocartbtn btn-primary"><ion-icon name="cart"></ion-icon>Ajouter au panier</button>
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-danger remove-wishlist-item"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                            </div>
                        </div>
                    @endforeach
            @else
                <h4>Aucun produit</h4>
            @endif

        </div>
    </div>


@endsection

@section('scripts')

    <script>
        $(document).ready(function () {

            $('.addtocartbtn').click(function (e) {
                e.preventDefault();

                var product_id = $(this).closest('.product_data').find('.prod_id').val();
                var product_qty = $(this).closest('.product_data').find('.qty-input').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "add-to-cart",
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'product_id': product_id,
                        'product_qty': product_qty,
                    },
                    success: function (response) {
                        swal("", response.status, "success");

                    },
                    error: function (response) {
                        // Affiche un message d'erreur
                        swal("", response.status, "error");
                    }


                });
            });
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
                        window.location.reload();
                        swal("",response.status, "success");

                    }
                });

            });


        });


    </script>

@endsection

