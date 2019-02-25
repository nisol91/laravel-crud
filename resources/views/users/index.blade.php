@extends('app');
@section('title')
    Index
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 contenitore">
            <h1>Users List</h1>
            <a href="{{ route('users.create') }}"><button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Create new element</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Age</th>
                    <th scope="col">cf</th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->cf }}</td>
                            <td><a class="btn btn-primary" href="{{ route('users.show', $user->id) }}" role="button">View</a></td>
                            <td><a class="btn btn-success" href="{{ route('users.edit', $user->id) }}" role="button">Edit</a></td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection
