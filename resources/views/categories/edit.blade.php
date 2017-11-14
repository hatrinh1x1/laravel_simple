@extends('admin.layouts.admin')
@section('title') UpdateCategories
@endsection
@section('content')
        <div class="space50"></div>
        <h1 class="text-center">Edit Categories</h1>

        {!! Form::model($category,[
        'method' => 'PATCH',
        'action' => ['CategoriesController@update',$category -> id],
        'class' => 'form-horizontal'
        ])!!}
        @include('categories.partials.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
@endsection