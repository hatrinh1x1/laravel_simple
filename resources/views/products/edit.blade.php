@extends('admin.layouts.admin')
@section('title') UpdateProducts
@endsection
@section('content')
        <div class="space50"></div>
        <h1 class="text-center">Edit Products</h1>

        {!! Form::model($product,[
        'method' => 'PATCH','action' => ['ProductsController@update',$product -> id],
        'class' => 'form-horizontal'
        ])!!}
        @include('products.partials.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
@endsection
