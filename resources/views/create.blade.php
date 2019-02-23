@extends('app');
@section('title')
    {{ $title }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            <h1>Create new element</h1>
            <a href="{{ route('mountains.create') }}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Crea nuovo utente</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

        </div>
    </div>
</div>
@endsection
