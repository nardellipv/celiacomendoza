<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class RecipesController extends Controller
{
    public function index()
    {
        $recipes = Recipes::with(['user', 'category'])
            ->orderBy('likes', 'DESC')
            ->paginate(9);

        return view('web.parts._recipes', compact('recipes'));
    }

    public function post($slug)
    {
        $recipe = Recipes::where('slug', $slug)
            ->first();

        $commerce = Commerce::where('user_id', $recipe->user_id)
            ->first();

        $relatedPosts = Blog::where('status', 'ACTIVE')
            ->inRandomOrder()
            ->take(2)
            ->get();

        return view('web.parts._postRecipes', compact('recipe', 'relatedPosts', 'commerce'));
    }

    public function like($id)
    {

        $recipe = Recipes::find($id);

        if (Cookie::get('votoRecipe' . $recipe->id) == $id) {

            Session::flash('message', 'Ya votaste anteriormente a esta Receta');

            return back();

        }

        $recipe->increment('likes', 1);
        $recipe->save();


        Cookie::queue('votoRecipe' . $recipe->id, $recipe->id, '2628000');


        Session::flash('message', 'Muchas gracias por tu voto');
        return back();
    }
}
