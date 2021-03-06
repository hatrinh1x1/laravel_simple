@extends('admin.layouts.admin')
@section('title') CreatePermissions
@endsection
@section('content')
    <div class="space50"></div>
    <h1 class="text-center">Create Permissions</h1>

    {!! Form::open(['action' => 'PermissionsController@store', 'class' => 'form-horizontal']) !!}
    @include('admin.permission.partials.form', ['submitButtonText' => 'Create'])
    {!! Form::close() !!}
@endsection
