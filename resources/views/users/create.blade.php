@extends('app');
@section('title')
    Create user
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            @include('partials.error')

            <h1>Create new user</h1>
            <form class="form-group" action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter name">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control" id="" placeholder="Enter lastname">
                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-control" id="" placeholder="Enter age">
                    <label for="cf">C.F.</label>
                    <input type="text" name="cf" class="form-control" id="" placeholder="Enter cf">
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
