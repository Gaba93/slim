@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <!-- Page header -->
    @include('auth.roles.partials._header')

    <!-- Horizontal menu -->
    @include('auth.partials._horizontal')

    <!-- Content -->
        <div class="col-md-9">
            <div class="row">
                <div class="container-fluid">

                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container-fluid">

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection