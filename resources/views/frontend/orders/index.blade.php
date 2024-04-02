@extends('layouts.front')

@section('title')
    Mes Commandes
@endsection


@section('content')

    <div class="py-3 mb-4 shadow-sm border-top" style="background: #3586ff;">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}">
                    Accueil
                </a> /
                <a href="{{ url('my-orders') }}">
                    Commandes
                </a> /

            </h6>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Mes commandes</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Date de commande</th>
                                <th>No de commande</th>
                                <th>Prix total</th>
                                <th>statut</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $item)
                                <tr>
                                    <td>{{ date('d-m-y', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->tracking_no }}</td>
                                    <td>{{ $item->total_price }} Fcfa</td>
                                    <td>{{ $item->status == '0' ? 'En attente' : 'Livrer'}}</td>
                                    <td><a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">view</a></td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
