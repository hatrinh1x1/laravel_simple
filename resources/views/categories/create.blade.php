@extends('admin.layouts.admin')
@section('title') CreateCategories
@endsection
@section('content')
        <div class="space50"></div>
        <h1 class="text-center">Create Categories</h1>

        {!! Form::open(['action' => 'CategoriesController@store', 'class' => 'form-horizontal']) !!}
        @include('categories.partials.form', ['submitButtonText' => 'Create'])
        {!! Form::close() !!}
@endsection
