@extends('layouts.manage')

@section('content')
    <div class="container is-fluid">
        <div class="columns m-t-10 level">
            <div class="column">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column create-user">
            <a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-add m-r-10"></i> Create New User</a>
            </div>
        </div>
        <hr>

        <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->toFormattedDateString()}}</td>
                                <td><a href="{{route('users.edit', $user->id)}}" class="button is-outlined">Edit</a></td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
        </div> <!-- end of .card -->
        {{$users->links()}}
    </div>
   


@endsection