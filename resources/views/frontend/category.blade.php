@extends('layouts.front')

@section('title')
    Category
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Toutes les Categories</h2>
                    <div class="row">
                    @foreach($category as $cate)
                        <div class="col-md-4 mb-3">
                            <a href="{{url('viewcategory/'.$cate->id)}}">
                                <div class="card">
                                    <img src="{{asset('asset/uploids/category/'.$cate->image)}}" style="width: 420px;height: 300px" alt="image categorie">
                                    <div class="card-body">
                                        <h5>{{$cate->name}} </h5>
                                        <br>
                                        <p style="height: 180px">
                                            {{$cate->description}}
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
    </div>
@endsection
