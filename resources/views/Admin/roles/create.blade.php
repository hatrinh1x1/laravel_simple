@extends('admin.layouts.admin')
@section('title') CreateRoles
@endsection
@section('content')
    <div class="container">
        <div class="space50"></div>
        <h1 class="text-center">Create Roles</h1>

        <div class="space50"></div>
        <a href="{{route('roles.index')}}" class="btn btn-info">View</a>

        {!! Form::open(['action' => 'RolesController@store', 'class' => 'form-horizontal']) !!}
        @include('admin.roles.partials.form', ['submitButtonText' => 'Create'])
        {!! Form::close() !!}
    </div>
@endsection