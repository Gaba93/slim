@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <!-- Page header -->
        <div class="col-md-9 col-md-offset-3">
            <div class="page-header">
                <h1>{!! trans('roles.roles') !!}</h1>
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
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="col-md-5">
                            <form class="form-horizontal" name="createRoleForm" id="createRoleFormId" method="POST">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" id="nameId" class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="descriptionId" class="form-control" rows="5"></textarea>
                                </div>

                                <div class="form-group">
                                    <button name="save" type="button" class="btn btn-primary">Save</button>
                                    <button name="cancel" type="button" class="btn btn-default">Cancel</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection