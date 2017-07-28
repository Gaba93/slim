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
        @if(session()->has('message'))
            <div class="col-md-9">
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            </div>
        @endif
        <!-- Content -->
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="col-md-5">
                            <form action="{{ $role->id ? route('roles.update', $role->id) : route('roles.store') }}" class="form-horizontal" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="control-label">Name</label>
                                    <input name="name" id="nameId" class="form-control" value="{{ old('name') ? old('name') : $role->name }}" />
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea name="description" id="descriptionId" class="form-control" rows="5">{{ old('description') ? old('description') : $role->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="save" type="button" class="btn btn-primary">Save</button>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection