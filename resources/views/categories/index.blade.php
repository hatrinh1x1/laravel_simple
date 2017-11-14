@extends('admin.layouts.admin')
@section('title') Categories
@endsection
@section('content')
    <h2 class="text-center">Categories</h2>
    <div class="space50">&nbsp;</div>

    <div class="col-md-12 col-md-offset-0">
        <a href="{{route('categories.create')}}" class="btn btn-info">Add new</a>
    </div>
    <div class="space50">&nbsp;</div>

    <table id="users-table" class="table ">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Status</td>
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
            ajax: '{{route('categories.show', ['category' => 1])}}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'description'},
                {data: 'status'},
                {data: 'action'},
            ]
        });
    });
@endsection