@extends('admin.layouts.admin')
@section('title') UpdateRoles
@endsection
@section('content')
    <div class="container">
        <div class="space50"></div>
        <h1 class="text-center">Edit Roles</h1>

        <div class="space50"></div>
        <a href="{{route('roles.index')}}" class="btn btn-info">View</a>

        {!! Form::model($role,[
        'method' => 'PATCH',
        'action' => ['RolesController@update',$role -> id],
        'class' => 'form-horizontal'
        ])!!}
        @include('admin.roles.partials.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
    </div>
@endsection