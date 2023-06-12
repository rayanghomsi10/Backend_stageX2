@extends('layouts.admin')

@section('title')
    Commandes
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Toutes les commandes
                            <a href="{{ 'order-history' }}" class="btn btn-warning float-right"> Historique des commandes</a></h3>
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
                                    <td>{{ date('d M Y H:i:s', strtotime($item->created_at)) }}</td>
                                    <td>{{ $item->tracking_no }}</td>
                                    <td>{{ $item->total_price }} Fcfa</td>
                                    <td>{{ $item->status == '0' ? 'En attente' : 'Livrer'}}</td>
                                    <td><a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-primary">view</a></td>
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
