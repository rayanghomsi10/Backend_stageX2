@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/Update category</h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 md-3" >
                        <label for="">Name</label>
                        <input type="text" value="{{$category->name}}" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Slug</label>
                        <input type="text" value="{{$category->slug}}" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Description</label>
                        <textarea name="description"  rows="3" class="form-control">{{$category->description}}</textarea>
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">status</label>
                        <input type="checkbox" {{$category->status == "1" ? 'checked':''}} name="status">
                    </div>
                    <div class="col-md-6 md-3">
                        <label for="">Popular</label>
                        <input type="checkbox" {{$category->popular == "1" ? 'checked':''}} name="Popular">
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Title</label>
                        <textarea name="meta_title"  rows="2" class="form-control">{{$category->meta_title}}</textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword"  rows="2" class="form-control">{{$category->meta_keyword}}</textarea>
                    </div>
                    <div class="col-md-12 md-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_descrip"  rows="2" class="form-control">{{$category->meta_descrip}}</textarea>
                    </div>
                    @if($category->image)
                        <img src="{{asset('./asset/uploids/category/'.$category->image)}}" alt="cat-image">
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
