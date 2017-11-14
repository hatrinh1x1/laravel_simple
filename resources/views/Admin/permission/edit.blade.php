@extends('admin.layouts.admin')
@section('title') UpdatePermissions
@endsection
@section('content')
    <div class="space50"></div>
    <h1 class="text-center">Edit Permissions</h1>

    {!! Form::model($permission,[
    'method' => 'PATCH',
    'action' => ['PermissionsController@update',$permission -> id],
    'class' => 'form-horizontal'
    ])!!}
    @include('admin.permission.partials.form', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}
@endsection