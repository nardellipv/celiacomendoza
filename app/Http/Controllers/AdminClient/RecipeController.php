<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Category;
use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\ClientRecipeRequest;
use celiacomendoza\Recipes;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Image;

class RecipeController extends Controller
{
    public function show()
    {
        $categories = Category::all();

        return view('web.parts.adminClient._addReceta', compact('categories'));
    }

    public function create(ClientRecipeRequest $request)
    {

//        dd($request->all());
        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        $recipe = new Recipes();
        $recipe->name = $request['name'];
        $recipe->ingredients = $request['ingredients'];
        $recipe->steps = $request['steps'];
        $recipe->slug = str_slug($request['name']);
        $recipe->user_id = Auth::user()->id;
        $recipe->category_id = str_slug($request['category_id']);
        $recipe->save();

        if ($request->photos) {
            $image = $request->file('photos');
            $input['photos'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/recetas/';
            $img = Image::make($image->getRealPath());
            $img->resize(369, 249)->save($destinationPath . $input['photos']);

            $destinationPath = 'images/' . $commerce->name . '-' . $commerce->id . '/receta';
            $image->move($destinationPath, $input['photos']);

            $recipe->photos = $input['photos'];
        }

        $recipe->update();

        Session::flash('message', 'Receta creada correctamente');
        return back();
    }
}
