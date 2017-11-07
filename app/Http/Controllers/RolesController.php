<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolesRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class RolesController extends Controller
{
    public function index()
    {
        return view('admin.roles.index');
    }

    public function show()
    {
        $role = Role::select(['id', 'name', 'display_name', 'description']);

        return DataTables::of($role)
            ->addColumn('action', function ($role) {
                return '<a href="' . route('roles.edit', $role->id) . '
                " class="btn btn-xs btn-primary">
                <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="' . route('roles.remove', $role->id) . '
                " class="btn btn-xs btn-danger">
                <i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
            ->make(true);
    }

    public function create()
    {
        $permission = Permission::all()->pluck('name','id');

        return view('admin.roles.create',compact('permission'));
    }

    public function store(RolesRequest $request)
    {
        Role::create($request->all())
            ->perms()
            ->sync($request->get('permissions'));

        return redirect()->route('roles.create');
    }

    public function edit($id)
    {
        $role = Role::with('perms')
            ->findOrFail($id);

        $permission = Permission::all()
            ->pluck('name', 'id');

        return view('admin.roles.edit', compact('role', 'permission'));
    }

    public function update($id, RolesRequest $request)
    {
        $role = Role::findOrFail($id);

        $role->update($request->all());

        $role->perms()->sync($request->get('permissions'));

        return Redirect::back();
    }

    public function remove($id)
    {
        Role::where('id',$id)->delete();

        return Redirect::back();
    }
}
