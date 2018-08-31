<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Category;
use celiacomendoza\Commerce;
use celiacomendoza\Product;
use celiacomendoza\Purchase;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

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
            ->where('id', '!=', $product_id)
            ->get();


        return view('web.product', compact('listCategories', 'commerce', 'product', 'lastProducts', 'relationItems'));
    }

    public function addcart($product_id, Request $request)
    {
        $product = Product::find($product_id);

        $buyProduct = Purchase::where('num_invoice', Cookie::get('id-recibo'))
            ->where('product_id', $product_id)
            ->first();

        //calculo precio
        $priceTotal = $product->price * $request['quantity'];

        if($buyProduct!= NULL) {
            if (Cookie::get('id-recibo') AND $buyProduct->product_id == $product_id) {
                Purchase::where('product_id', $buyProduct->product_id)
                    ->update([
                        'quantity' => $buyProduct->quantity + $request['quantity'],
                    ]);

            }
        }

        else {

            //inserto factura provisoria
            if (Cookie::get('id-recibo')) {
                $purchase = new Purchase;
                $purchase->num_invoice = Cookie::get('id-recibo');
                $purchase->name = $product->name;
                $purchase->price = $priceTotal;
                $purchase->quantity = $request['quantity'];
                $purchase->photo = $product->photo;
                $purchase->commerce_id = $product->commerce_id;
                $purchase->product_id = $product_id;
                $purchase->save();

            } else {
                //creo cookie para identificar cliente y compra
                $newNum = str_random(10);
                $id_recibo = Cookie::queue('id-recibo', $newNum, '3600');

                $purchase = new Purchase;
                $purchase->num_invoice = $newNum;
                $purchase->name = $product->name;
                $purchase->price = $priceTotal;
                $purchase->quantity = $request['quantity'];
                $purchase->photo = $product->photo;
                $purchase->commerce_id = $product->commerce_id;
                $purchase->product_id = $product_id;
                $purchase->save();
            }
        }

        Session::flash('message', 'Producto agregado correctamente');
        return back();
    }

    public function cart($id)
    {
        $commerce = Commerce::find($id);

        $numInvoice = Cookie::get('id-recibo');

        $listProducts = Purchase::where('num_invoice', $numInvoice)
            ->get();

        return view('web.cart', compact('commerce', 'listProducts'));
    }
}
