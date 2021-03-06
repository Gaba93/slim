@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <!-- Page header -->
        @include('auth.roles.partials._header')

        <!-- Horizontal menu -->
        @include('auth.partials._horizontal')

        <!-- Content -->
        <div class="col-md-9">
            <!-- Search -->
            <div class="row">
                <div class="container-fluid">
                    @include('auth.roles.partials._search')
                </div>
            </div>

            <!-- Roles list -->
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container-fluid">
                        @include('auth.roles.partials._table')
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection