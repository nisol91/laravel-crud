@extends('app');
@section('title')
    {{ $user->name }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            <h1>This is mount {{ $user['name'] }}   page</h1>
        <a href="{{ route('users.index') }}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Back to users list</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul>
                <li>Name: {{ $user->name }}</li>
                <li>Nation: {{ $user->lastname }}</li>
                <li>Age: {{ $user->age }}</li>
                <li>C.F.: {{ $user->cf }} </li>
            </ul>
        </div>
    </div>
</div>
@endsection
