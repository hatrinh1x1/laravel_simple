@extends('admin.layouts.admin')
@section('title') Permissions
@endsection
@section('content')
    <h2 class="text-center">Permissions</h2>
    <div class="space50">&nbsp;</div>

    <div class="col-md-12 col-md-offset-0">
        <a href="{{route('permissions.create')}}" class="btn btn-info">Add new</a>
    </div>
    <div class="space50">&nbsp;</div>

    <table id="users-table" class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Display_name</td>
            <td>Description</td>
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
            ajax: '{{route('permissions.show', ['permission' => 1])}}',
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'display_name'},
                {data: 'description'},
                {data: 'action'},
            ]
        });
    });
@endsection