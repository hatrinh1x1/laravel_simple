@extends('admin.layouts.admin')
@section('title') UpdatePermissions
@endsection
@section('content')
<div class="container">
    <div class="space50"></div>
    <h1 class="text-center">Edit Permissions</h1>

    <div class="space50"></div>
    <a href="{{route('permissions.index')}}" class="btn btn-info">View</a>

    {!! Form::model($permission,[
    'method' => 'PATCH',
    'action' => ['PermissionsController@update',$permission -> id],
    'class' => 'form-horizontal'
    ])!!}
    @include('admin.permission.partials.form', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}
</div>
@endsection