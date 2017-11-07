@extends('admin.layouts.admin')
@section('title') UpdateCategories
@endsection
@section('content')
    <div class="container">
        <div class="space50"></div>
        <h1 class="text-center">Edit Categories</h1>

        <div class="space50"></div>
        <a href="{{route('categories.index')}}" class="btn btn-info">View</a>

        {!! Form::model($category,[
        'method' => 'PATCH',
        'action' => ['CategoriesController@update',$category -> id],
        'class' => 'form-horizontal'
        ])!!}
        @include('categories.partials.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
    </div>
@endsection