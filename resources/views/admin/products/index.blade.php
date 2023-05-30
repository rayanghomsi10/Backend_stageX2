@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Products page</h4>
        </div>
        <div class="card-body">
            <table class="table-bordered table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Selling price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->selling_price}}</td>
                        <td>{{$item->qty}}</td>
                        <td><img src="{{asset('./asset/uploids/products/'.$item->image)}}" alt="image" class="cate-image"> </td>
                        <td>
                            <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{url('delete-product/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>
    </div>
@endsection
