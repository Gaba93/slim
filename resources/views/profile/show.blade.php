@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-9 col-md-offset-3">
            <div class="page-header">
                <h1>{!! trans('profile.profile') !!}: <small>{{ Auth::user()->name }}</small></h1>
            </div>
        </div>
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">{!! trans('profile.summary') !!}</a>
                <a href="#" class="list-group-item">{!! trans('profile.groups') !!}</a>
                <a href="#" class="list-group-item">{!! trans('profile.roles_n_permissions') !!}</a>
                <a href="#" class="list-group-item">{!! trans('profile.projects') !!}</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{!! trans('profile.details') !!}</div>
                <div class="panel-body">
                    <div class="container">
                        <div class="col-md-6">
                            <dl class="dl-horizontal">
                                <dt>{!! trans('profile.email') !!}:</dt>
                                <dd>{{ Auth::user()->email }}</dd>
                                <dt>{!! trans('profile.name') !!}:</dt>
                                <dd>{{ Auth::user()->name }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <img src="{{URL::asset('/images/avatar.png')}}" class="img-rounded">
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">{!! trans('profile.preferences') !!}</div>
                <div class="panel-body">
                    <div class="container">
                        <dl class="dl-horizontal">
                            <dt>{!! trans('profile.timezone') !!}:</dt>
                            <dd></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection