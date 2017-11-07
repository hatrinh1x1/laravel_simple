@extends('admin.layouts.admin')
@section('title') Products
@endsection
@section('content')
    <h2 class="text-center">Products</h2>
    <div class="space50">&nbsp;</div>

    <a href="{{route('products.create')}}" class="btn btn-info">Add new</a>
    <div class="space50">&nbsp;</div>

    <table id="users-table" class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Status</td>
                <td>Priority</td>
                <td>Action</td>
            </tr>
        </thead>
    </table>
@endsection
@section('js')
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{route('products.show', ['product' => 1])}}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'description'},
                {data: 'status'},
                {data: 'priority'},
                {data: 'action'},
            ]
        });
    });
@endsection