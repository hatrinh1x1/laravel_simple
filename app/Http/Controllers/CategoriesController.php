<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Categories;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function show()
    {
        $category = Categories::select(['id', 'name', 'description', 'status']);

        return DataTables::of($category)
            ->addColumn('action', function ($category) {
                return '<a 
                    href="' . route('categories.edit', $category->id) . '" 
                    class="btn btn-xs btn-primary">
                        <i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="' . route('categories.remove', $category->id) . '" 
                        class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete
                    </a>';
            })
            ->make(true);
    }
    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoriesRequest $request)
    {
        Categories::create($request->all());

        return redirect()->route('categories.create');
    }

    public function edit($id)
    {
        $category = Categories::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update($id, CategoriesRequest $request)
    {
        Categories::findOrFail($id)
            ->update($request->all());

        return Redirect::back();
    }

    public function remove($id)
    {
        Categories::findOrFail($id)
            ->delete();

        return Redirect::back();
    }
}
