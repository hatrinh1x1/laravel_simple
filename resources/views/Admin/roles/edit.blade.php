@extends('admin.layouts.admin')
@section('title') UpdateRoles
@endsection
@section('content')
        <div class="space50"></div>
        <h1 class="text-center">Edit Roles</h1>

        {!! Form::model($role,[
        'method' => 'PATCH',
        'action' => ['RolesController@update',$role -> id],
        'class' => 'form-horizontal'
        ])!!}
        @include('admin.roles.partials.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
@endsection