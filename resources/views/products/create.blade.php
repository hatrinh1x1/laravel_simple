@extends('admin.layouts.admin')
@section('title') CreateProducts
@endsection
@section('content')
<div class="container">
    <div class="space50"></div>
    <h1 class="text-center">Create Products</h1>

    <div class="space50"></div>
    <a href="{{route('products.index')}}" class="btn btn-info">View</a>

    {!! Form::open(['action' => 'ProductsController@store', 'class' => 'form-horizontal']) !!}
    @include('products.partials.form', ['submitButtonText' => 'Create'])
    {!! Form::close() !!}
</div>
@endsection


