@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-md-12" >
                <div class="card" >
                    <div class="card-header" style="padding: 15px">
                        <h4>Users Detail
                            <a href="{{ 'users' }}" class="btn btn-sm btn-primary float-right">Back</a>
                        </h4>

                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <label for="">Role</label>
                                <div class="p-2 border">{{ $users->role}}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Nom</label>
                                <div class="p-2 border">{{ $users->name }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Prenom</label>
                                <div class="p-2 border">{{ $users->lname }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Email</label>
                                <div class="p-2 border">{{ $users->email }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Phone</label>
                                <div class="p-2 border">{{ $users->phone }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Adresse 1</label>
                                <div class="p-2 border">{{ $users->address1 }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Adresse 2</label>
                                <div class="p-2 border">{{ $users->address2 }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Pays</label>
                                <div class="p-2 border">{{ $users->country }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Ville</label>
                                <div class="p-2 border">{{ $users->city }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Quartier</label>
                                <div class="p-2 border">{{ $users->state }}</div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Code</label>
                                <div class="p-2 border">{{ $users->pincode }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
