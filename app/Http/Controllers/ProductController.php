<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Category;
use celiacomendoza\Commerce;
use celiacomendoza\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($id, $product_id)
    {
        $commerce = Commerce::find($id);

        $listCategories = Category::all();

        $product = Product::where('id', $product_id)
            ->first();

        $lastProducts = Product::where('commerce_id', $id)
            ->orderBy('updated_at', 'DESC')
            ->take(3)
            ->get();

        $relationItems = Product::where('category_id', $product->category_id)
            ->where('commerce_id', $id)
            ->where('id','!=',$product_id)
            ->get();


        return view('web.product', compact('listCategories', 'commerce', 'product', 'lastProducts', 'relationItems'));
    }
}
