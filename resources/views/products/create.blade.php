@extends('admin.layouts.admin')
@section('title') CreateProducts
@endsection
@section('content')
    <div class="space50"></div>
    <h1 class="text-center">Create Products</h1>

    {!! Form::open(['action' => 'ProductsController@store', 'class' => 'form-horizontal']) !!}
    @include('products.partials.form', ['submitButtonText' => 'Create'])
    {!! Form::close() !!}
@endsection


