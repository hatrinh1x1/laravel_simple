@extends('admin.layouts.admin')
@section('title') CreateCategories
@endsection
@section('content')
    <div class="container">
        <div class="space50"></div>
        <h1 class="text-center">Create Categories</h1>

        <div class="space50"></div>
        <a href="{{route('categories.index')}}" class="btn btn-info">View</a>

        {!! Form::open(['action' => 'CategoriesController@store', 'class' => 'form-horizontal']) !!}
        @include('categories.partials.form', ['submitButtonText' => 'Create'])
        {!! Form::close() !!}
    </div>
@endsection
