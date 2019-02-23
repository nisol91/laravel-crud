@extends('app');
@section('title')
    {{ $title }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            <h1>Mountains List</h1>
            <a href="{{ route('mountains.create') }}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Crea nuovo utente</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Nation</th>
                    <th scope="col">Altitude</th>
                    <th scope="col">Actions</th>

                  </tr>
                </thead>
                @foreach ($mountains as $montagna)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $montagna->ID }}</th>
                            <td>{{ $montagna->Nome }}</td>
                            <td>{{ $montagna->Nazione }}</td>
                            <td>{{ $montagna->Altitudine }} m</td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
