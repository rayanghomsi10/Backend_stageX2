@extends('layouts.front')

@section('title')
    Bienvenue sur le site
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="py-5" style="background-color: #21D4FD;
background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
">
        <div class="container" >
            <div class="row">
                <h1>Produits Vedettes</h1>
                <div class="owl-carousel featured-carousel owl-theme">
                        @foreach($featured_products as $prod)
                            <div class="item" style="border: 2px solid; border-radius: 10px">
                                <div class="card" >
                                    <img src="{{asset('asset/uploids/products/'.$prod->image)}}" style="width: 320px;height: 300px; border-radius: 10px;" alt="image produits">
                                    <div class="card-body">
                                        <h5>{{$prod->name}} </h5>
                                        <br>
                                        <span class="float-start">{{$prod->selling_price}} XAF</span>
                                        <span class="float-end" style="text-decoration: line-through"> {{$prod->original_price}} XAF</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <h1>Categories Tendances</h1>
                <div class="owl-carousel featured-carousel ">
                    @foreach($trending_category as $tcate)
                        <div class="item" style="border: 2px solid; border-radius: 10px">
                            <a href="{{url('viewcategory/'.$tcate->id)}}">
                            <div class="card">
                                <img src="{{asset('asset/uploids/category/'.$tcate->image)}}" style="width: 320px;height: 300px; border-radius: 10px;" alt="image produits">
                                <div class="card-body">
                                    <h5>{{$tcate->name}} </h5>
                                    <br>
                                    <p>
                                        {{$tcate->description}}
                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })
    </script>

@endsection


