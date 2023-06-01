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
            <div class="card-body">
                @foreach($cartitems as $item)
                    <div class="row product_data">
                        <div class="col-md-2">
                            <img src="{{ asset('asset/uploids/products/'.$item->products->image) }}" height="70px" width="70px" alt="image">
                        </div>
                        <div class="col-md-5">
                            <h6>{{ $item->products->name }}</h6>
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            <label for="Quantity">Quantite</label>
                            <div class="input-group text-center mb-3" style="width: 130px">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" value="{{ $item->prod_qty }}" class="form-control qty-input">
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger delete-cart-item"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                        </div>
                    </div>
                @endforeach
            </div>
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

