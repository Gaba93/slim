@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <!-- Page header -->
        <div class="col-md-9 col-md-offset-3">
            <div class="page-header">
                <h1>{!! trans('roles.roles') !!}</h1>
                <footer>{!! trans('roles.note') !!}</footer>
            </div>
        </div>

        <!-- Horizontal menu -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('roles.index') }}" class="list-group-item active">{!! trans('roles.roles') !!}</a>
                <a href="#" class="list-group-item">{!! trans('roles.permissions') !!}</a>
                <a href="#" class="list-group-item">{!! trans('roles.teams') !!}</a>
            </div>
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-4">
                        <form class="form" name="roleSearchForm" id="roleSearchFormId" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="searchRole" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <div class="cl-md-8 text-right">
                        <a class="btn btn-default" name="createRoleButton" id="createRoleButtonId" href="{{ route('roles.create') }}">Create</a>
                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container-fluid">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Project Roles</th>
                                    <th>Description</th>
                                    <th>User</th>
                                    <th>Teams</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm" name="edit" >Edit</a>
                                            <a class="btn btn-danger btn-sm" name="edit">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection