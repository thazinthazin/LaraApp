@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if(session('success'))
                <p class="alert alert-success">{{session('success')}}</p>
            @endif

            <a href="{{url('/create/user')}}" class="btn btn-success pull-right">Create User</a>
        </div>

        <div class="row">
            <h2>User List</h2>
            <hr>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Created Date</td>
                    <td>Updated Date</td>
                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td><a href="{{action('Crud\CrudController@edit', $user->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{action('Crud\CrudController@destroy', $user->id)}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
@endsection