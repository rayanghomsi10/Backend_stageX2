@extends('layouts.front')

@section('title')
    {{$category->name}}
@endsection

@section('content')

    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <a href="{{ url('category/') }}"> <h6 class="mb-0"> {{$category->name}}</h6></a>
        </div>
    </div>

    <div class="py-5" >
        <div class="container" >
            <div class="row">
                <h2>{{$category->name}} </h2>
                    @foreach($products as $prod)
                        <div class="col-md-3 mb-3" >
                            <br>
                            <div class="card" style="border: 2px solid; border-radius: 10px">
                                <a href="{{url('category/'.$category->slug.'/'.$prod->slug)}}">
                                    <img src="{{asset('asset/uploids/products/'.$prod->image)}}" style="width: 320px;height: 300px; border-radius: 10px;" alt="image produits">
                                    <div class="card-body">
                                        <h5>{{$prod->name}} </h5>
                                        <br>
                                        <span class="float-start">{{$prod->selling_price}} XAF</span>
                                        <span class="float-end" style="text-decoration: line-through"> {{$prod->original_price}} XAF</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
@endsection



