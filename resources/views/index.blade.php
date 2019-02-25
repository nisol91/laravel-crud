@extends('app');
@section('title')
    Index
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            <h1>Mountains List</h1>
            <a href="{{ route('mountains.create') }}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Create new element</button></a>
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
                    <th scope="col">Elevation</th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                @foreach ($mountains as $montagna)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $montagna->id }}</th>
                            <td>{{ $montagna->name }}</td>
                            <td>{{ $montagna->nation }}</td>
                            <td>{{ $montagna->elevation }} m</td>
                            <td><a class="btn btn-primary" href="{{ route('mountains.show', $montagna->id) }}" role="button">View</a></td>
                            <td><a class="btn btn-success" href="{{ route('mountains.edit', $montagna->id) }}" role="button">Edit</a></td>
                            <td>
                                <form action="{{ route('mountains.destroy', $montagna->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
