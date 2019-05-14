<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $posts = Blog::orderBy('created_at', 'DESC')
            ->where('type', 'Personal')
            ->paginate(5);

        return view('web.parts._personal', compact('posts'));
    }

    public function postHistorias($slug)
    {
        $post = Blog::where('slug', $slug)
            ->where('type', 'Personal')
            ->first();

        return view('web.parts._postHistoria', compact('post'));
    }
}
