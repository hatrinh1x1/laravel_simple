@extends('admin.layouts.admin')
@section('title') CreateRoles
@endsection
@section('content')
        <div class="space50"></div>
        <h1 class="text-center">Create Roles</h1>

        {!! Form::open(['action' => 'RolesController@store', 'class' => 'form-horizontal']) !!}
        @include('admin.roles.partials.form', ['submitButtonText' => 'Create'])
        {!! Form::close() !!}
@endsection