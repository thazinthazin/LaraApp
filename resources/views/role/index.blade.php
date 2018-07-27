@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Role Management</div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            @php $i = 1 @endphp
                            @foreach($roles as $role)
                            <tr class="list-users">
                                <td>{{ $i++ }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                <td>
                                    <a href="#" class="btn btn-info">Show</a>
                                    <a href="#" class="btn btn-primary">Edit</a>

                                    <form action="" style="display: inline-block">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <a href="#" class="btn btn-success">New Role</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection