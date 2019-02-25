@extends('app');
@section('title')
    {{ $mountain->name }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            <h1>This is mount {{ $mountain['name'] }}</h1>
        <a href="{{ route('mountains.index') }}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Back to mountains list</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul>
                <li>Name: {{ $mountain->name }}</li>
                <li>Nation: {{ $mountain->nation }}</li>
                <li>Elevation: {{ $mountain->elevation }} m</li>
                <img src="{{ $mountain->link_img }}" alt="">
            </ul>
        </div>
    </div>
</div>
@endsection
