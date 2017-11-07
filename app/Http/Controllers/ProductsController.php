<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function show()
    {
        $product = Products::select(['id', 'name', 'description', 'status','priority']);

        return DataTables::of($product)
            ->addColumn('action', function ($product) {
                return '<a href="' . route('products.edit', $product->id) . '
                " class="btn btn-xs btn-primary">
                <i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="' . route('products.remove', $product->id) . '
                " class="btn btn-xs btn-danger">
                <i class="glyphicon glyphicon-remove"></i> Delete</a>';
            })
            ->make(true);
    }

    public function create()
    {
        $categories = Categories::all()->pluck('name', 'id');

        return view('products.create', compact('categories'));
    }

    public function store(ProductsRequest $request)
    {
        Products::create($request->all())
            ->categories()
            ->sync($request->get('categories'));

        return redirect()->route('products.create');
    }

    public function edit($id)
    {
        $product = Products::with('categories')
            ->findOrFail($id);

        $categories = Categories::all()
            ->pluck('name', 'id');

        return view('products.edit', compact('product', 'categories'));
    }

    public function update($id, ProductsRequest $request)
    {
        $product = Products::findOrFail($id);

        $product->update($request->all());

        $product->categories()->sync($request->get('categories'));

        return Redirect::back();
    }

    public function remove($id)
    {
        Products::findOrFail($id)->delete();

        return Redirect::back();
    }
}
