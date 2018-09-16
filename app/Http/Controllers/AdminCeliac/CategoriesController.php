<?php

namespace celiacomendoza\Http\Controllers\AdminCeliac;

use celiacomendoza\Category;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.parts._listCategories', compact('categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.parts._editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->fill($request->all())->save();

        return back();
    }

}
