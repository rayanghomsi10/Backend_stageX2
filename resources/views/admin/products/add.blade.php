@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <select class="form-select" name="cate_id" >
                            <option value="">Selectionner la categorie</option>
                            @foreach($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">small_description</label>
                        <textarea name="small_description"  class="form-control" rows="3"></textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Description</label>
                        <textarea name="description"  rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Original price</label>
                        <input type="number" class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Selling price</label>
                        <input type="number" class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Tax</label>
                        <input type="number" class="form-control" name="tax">
                    </div>
                    <div class="col-md-6 md-3" >
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Title</label>
                        <textarea name="meta_title"  rows="2" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword"  rows="2" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description"  rows="2" class="form-control"></textarea>
                    </div>
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
