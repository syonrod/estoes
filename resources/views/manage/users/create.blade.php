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
    </div>
        <hr class="m-t-0">

@endsection