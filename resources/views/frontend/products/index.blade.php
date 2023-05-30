@extends('layouts.front')

@section('title')
    {{$category->name}}
@endsection

@section('content')
    <div class="py-5" style="background-color: #21D4FD;
background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
">
        <div class="container" >
            <div class="row">
                <h2>{{$category->name}} </h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach($products as $prod)
                        <div class="col-md-3 mb-3" style="border: 2px solid; border-radius: 10px">
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
@endsection
