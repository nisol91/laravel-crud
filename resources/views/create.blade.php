@extends('app');
@section('title')
    Create
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            <h1>Create new element</h1>
            {{-- esempio di tipico form di input --}}
            <form class="form-group" action="{{ route('mountains.store') }}" method="post">
                @csrf
                {{-- token di sicurezza per verificare che sia tu a inserire i dati e non hacker da altri pc--}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter name">
                    <label for="nation">Nation</label>
                    <input type="text" name="nation" class="form-control" id="" placeholder="Enter nation">
                    <label for="elevation">Elevation</label>
                    <input type="number" name="elevation" class="form-control" id="" placeholder="Enter elevation">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Save new element">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

        </div>
    </div>
</div>
@endsection
