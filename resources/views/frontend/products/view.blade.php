@extends('layouts.front')

@section('title', $products->name)



@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0"> {{$products->category->name}} / {{ $products->name }}</h6>
        </div>
    </div>


    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('asset/uploids/products/'.$products->image) }}" class="w-100" alt="produit">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{$products->name}}
                            <label style="font-size: 16px" class="float-end badge bg-danger trending_tag">{{ $products->trending == '1' ? 'Tendance':'' }}</label>
                        </h2>
                        <br>
                        <hr>
                        <label class="me-3" style="text-decoration: line-through ">Prix d'origine : {{ $products->original_price }} XAF</label>
                        <label class="fw-bold">Prix de vente : {{ $products->selling_price }} XAF</label>
                        <p class="mt-3">
                            {!! $products->small_description !!}
                        </p>
                        <br>
                        <hr>
                        <br>
                        @if($products->qty > 0)
                            <label class="badge bg-success">En stock</label>
                        @else
                            <label class="badge bg-danger">Fini</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="Quantity">Quantite</label>
                                <div class="input-group text-center mb-3">
                                    <button class="input-group-text decrement-btn">-</button>
                                    <input type="text" name="quantity" value="1" class="form-control qty-input">
                                    <button class="input-group-text increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br/>
                                <button type="button" class="btn btn-success me-3 float-start">Wishlist <ion-icon name="heart-outline"></ion-icon></button>
                                <button type="button" class="btn btn-primary me-3 float-start">panier <ion-icon name="cart-outline"></ion-icon></button>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <hr>
                    <br>
                    <h3 class="mb-0">
                        Description
                    </h3>
                    <br>
                    <p>
                        {!! $products->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $('.increment-btn').click(function (e) {
                e.preventDefault();

                var inc_value = $('.qty-input').val();
                var value = parseInt(inc_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    $('.qty-input').val(value);
                }
            });

            $('.decrement-btn').click(function (e) {
                e.preventDefault();

                var dec_value = $('.qty-input').val();
                var value = parseInt(dec_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    $('.qty-input').val(value);
                }
            });

        });
    </script>

@endsection
