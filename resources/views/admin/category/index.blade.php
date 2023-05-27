@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Category page</h4>
        </div>
        <div class="card-body">
            <div class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td><img src="{{asset('asset/uploids/category/'.$item->image)}}" alt="image"> </td>
                    <td>
                        <div class="btn btn-primary">Edit</div>
                        <div class="btn btn-danger">Delete</div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </div>

        </div>
    </div>
@endsection
