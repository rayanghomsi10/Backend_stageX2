@extends('layouts.front')

@section('title')
    Bienvenue sur le site
@endsection

@section('content')
    @include('layouts.inc.slider')
    <div class="py-5" style="background-color: #6486ff">
        <div class="container" >
            <div class="row">
                <h1>Produits Vedettes</h1>
                <div class="owl-carousel featured-carousel owl-theme">
                        @foreach($featured_products as $prod)
                            <div class="item item-container">
                                <a href="{{ url('category/'.$prod->category->slug.'/'.$prod->slug) }}">
                                    <div class="body-container" >
                                        <div class="img-container">
                                            <img src="{{asset('asset/uploids/products/'.$prod->image)}}" style="width: 320px;height: 300px; border-radius: 10px;" alt="image produits">
                                        </div>
                                        <div class="overlay"></div>
                                        <div class="body-container">
                                            <div class="even-info">
                                                <h5>{{$prod->name}} </h5>
                                                <div class="separator"></div>
                                                <p class="float-start info">{{$prod->selling_price}} XAF</p>
                                                <p class="float-end info" style="text-decoration: line-through"> {{$prod->original_price}} XAF</p>
                                                <div class="additional-info">
                                                    <p class="info">{{ $prod->small_description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
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
                        <div class="item item-container">
                                <a href="{{url('viewcategory/'.$tcate->id)}}">
                            <div class="body-container">
                                <div class="img-container">
                                    <img src="{{asset('asset/uploids/category/'.$tcate->image)}}" style="width: 320px;height: 300px; border-radius: 10px;" alt="image produits">
                                </div>
                                <div class="overlay"></div>
                                <div class="body-container ">
                                    <div class="even-info">
                                        <p class="title">{{$tcate->name}} </p>
                                        <div class="separator"></div>
                                        <div class="additional-info">
                                            <p class="info ">
                                                {{$tcate->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
    @include('layouts.inc.frontendfooter')
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:5,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1200:{
                    items:3
                },
                1300:{
                    items:4
                }
            }
        })
    </script>

@endsection




