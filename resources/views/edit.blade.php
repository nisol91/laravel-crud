@extends('app');
@section('title')
    Edit {{ $mountain->name }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            <h1>Edit element: {{ $mountain->name }}</h1>
            {{-- esempio di tipico form di input --}}
            <form class="form-group" action="{{ route('mountains.update', $mountain->ID) }}" method="post">
                @method('PUT')
                @csrf
                {{-- token di sicurezza per verificare che sia tu a inserire i dati e non hacker da altri pc--}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter name" value="{{$mountain->name}}">
                    <label for="nation">Nation</label>
                    <input type="text" name="nation" class="form-control" id="" placeholder="Enter nation" value="{{$mountain->nation}}">
                    <label for="elevation">Elevation</label>
                    <input type="number" name="elevation" class="form-control" id="" placeholder="Enter elevation" value="{{$mountain->elevation}}">
                    <label for="link_img">Image Link</label>
                    <input type="text" name="link_img" class="form-control" id="" placeholder="Enter link image" value="{{$mountain->link_img}}">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Update new element" class="form-control">
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
