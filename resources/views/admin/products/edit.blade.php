@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Categorie</label>
                        <select class="form-select" >
                            <option>{{$products->category->name}}</option>
                        </select>
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="{{$products->name}}" name="name">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" value="{{$products->slug}}"  name="slug">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">small_description</label>
                        <textarea name="small_description"   class="form-control" rows="3">{{$products->small_description}}</textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Description</label>
                        <textarea name="description"   rows="3" class="form-control">{{$products->description}}</textarea>
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Original price</label>
                        <input type="number" class="form-control" value="{{$products->original_price}}" name="original_price">
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Selling price</label>
                        <input type="number" class="form-control" value="{{$products->selling_price}}" name="selling_price">
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Tax</label>
                        <input type="number" class="form-control" value="{{$products->tax}}" name="tax">
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" value="{{$products->qty}}" name="qty">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">status</label>
                        <input type="checkbox" {{$products->status == "1" ? 'checked':''}} name="status">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Trending</label>
                        <input type="checkbox" {{$products->trending == "1" ? 'checked':''}} name="trending">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Title</label>
                        <textarea name="meta_title"  rows="2"  class="form-control">{{$products->meta_title}}</textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword"  rows="2"  class="form-control">{{$products->meta_keyword}}</textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description"   rows="2" class="form-control">{{$products->small_description}}</textarea>
                    </div>
                    @if($products->image)
                        <img src="{{asset('./asset/uploids/products/'.$products->image)}}" alt="cat-image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
