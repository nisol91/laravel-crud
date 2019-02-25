@extends('app');
@section('title')
    Edit user {{ $user->id }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            @include('partials.error')

            <h1>Edit user: {{ $user->id }}</h1>
            {{-- esempio di tipico form di input --}}
            <form class="form-group" action="{{ route('users.update', $user->id) }}" method="post">
                @method('PUT')
                @csrf
                {{-- token di sicurezza per verificare che sia tu a inserire i dati e non hacker da altri pc--}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter name" value="{{$user->name}}">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="" placeholder="Enter lastname" value="{{$user->lastname}}">
                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-control" id="" placeholder="Enter age" value="{{$user->age}}">
                    <label for="cf">C.F.</label>
                    <input type="text" name="cf" class="form-control" id="" placeholder="Enter cf" value="{{$user->cf}}">
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
