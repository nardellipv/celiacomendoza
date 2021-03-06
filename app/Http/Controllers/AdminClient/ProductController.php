<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Category;
use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\ClientProductRequest;
use celiacomendoza\Product;
use celiacomendoza\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Image;

use celiacomendoza\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function create()
    {
        $user = User::where('id', auth()->user()->id)
            ->first();

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $categories = Category::all();

        return view('web.parts.adminClient._productsCreate', compact('user', 'commerce', 'categories'));
    }

    public function store(ClientProductRequest $request)
    {
        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $product = new Product;
        $product->commerce_id = $commerce->id;
        $product->fill($request->all())->save();

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/products/';
            $img = Image::make($image->getRealPath());
            $img->resize(110, 118)->save($destinationPath . $input['file']);

            $destinationPath = 'images/' . $commerce->name . '-' . $commerce->id . '/products';
            $image->move($destinationPath, $input['file']);

            $product->photo = $input['file'];
        }

        $product->update();

        Session::flash('message', 'Producto agregado correctamente');
        return back();
    }

    public function edit($id)
    {
        $product = Product::find($id);

        //controlo de que sea el dueño del producto
        $this->authorize('passProduct', $product);

        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $categories = Category::all();

        return view('web.parts.adminClient._productsEdit', compact('categories', 'product', 'commerce'));
    }

    public function update(ClientProductRequest $request, $id)
    {

        $product = Product::find($id);

        //controlo de que sea el dueño del producto
        $this->authorize('passProduct', $product);

        $product->fill($request->all())->save();

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/products/';
            $img = Image::make($image->getRealPath());
            $img->resize(110, 118)->save($destinationPath . $input['file']);

            $destinationPath = 'images/' . $product->commerce->name . '-' . $product->commerce->id . '/products';
            $image->move($destinationPath, $input['file']);

            $product->photo = $input['file'];
        }

        $product->update();

        Session::flash('message', 'Producto modificado correctamente');
        return back();
    }

    public function available($id)
    {
        $product = Product::find($id);

        //controlo de que sea el dueño del producto
        $this->authorize('passProduct', $product);
        $product->available = 'YES';
        $product->update();

        Session::flash('message', 'Producto Activado correctamente');
        return back();
    }

    public function unavailable($id)
    {
        $product = Product::find($id);

        //controlo de que sea el dueño del producto
        $this->authorize('passProduct', $product);
        $product->available = 'NO';
        $product->update();

        Session::flash('message', 'Producto Activado correctamente');
        return back();
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        //controlo de que sea el dueño del producto
        $this->authorize('passProduct', $product);

        if (File::exists(public_path('images/thumbnail/products/' . $product->photo))) {
            File::delete(public_path('images/thumbnail/products/' . $product->photo));
        }

        if (File::exists(public_path('images/' . $product->commerce->name . '-' . $product->commerce->id . '/products/' . $product->photo))) {
            File::delete(public_path('images/' . $product->commerce->name . '-' . $product->commerce->id . '/products/' . $product->photo));
        }

        $product->delete();

        Session::flash('message', 'Producto eliminado correctamente');
        return back();
    }
}
