@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <!-- Page header -->
        @include('auth.roles.partials._header')

        <!-- Horizontal menu -->
        @include('auth.partials._horizontal')

        <!-- Response message -->
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

                    <!-- Role form -->
                    <div class="container-fluid">
                        <div class="col-md-5">
                            @include('auth.roles.partials._form')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection