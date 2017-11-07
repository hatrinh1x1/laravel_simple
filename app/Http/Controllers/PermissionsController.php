<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionsRequest;
use App\Models\Permission;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class PermissionsController extends Controller
{
    public function index()
    {
        return view('admin.permission.index');
    }

    public function show()
    {
        $permission = Permission::select(['id', 'name', 'display_name', 'description']);

        return DataTables::of($permission)
            ->addColumn('action', function ($permission) {
                return '<a 
                    href="' . route('permissions.edit', $permission->id) . '" 
                    class="btn btn-xs btn-primary">
                        <i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="' . route('permissions.remove', $permission->id) . '" 
                        class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete
                    </a>';
            })
            ->make(true);
    }

    public function create()
    {
        return view('admin.permission.create');
    }

    public function store(PermissionsRequest $request)
    {
        Permission::create($request->all());

        return redirect()->route('permissions.create');
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);

        return view('admin.permission.edit', compact('permission'));
    }

    public function update($id, PermissionsRequest $request)
    {
        Permission::findOrFail($id)
            ->update($request->all());

        return Redirect::back();
    }

    public function remove($id)
    {
        Permission::findOrFail($id)
            ->delete();

        return Redirect::back();
    }

}
