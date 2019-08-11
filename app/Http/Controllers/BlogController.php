<?php

namespace celiacomendoza\Http\Controllers;

use celiacomendoza\Blog;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::orderBy('created_at', 'DESC')
            ->where('type', 'Blog')
            ->paginate(5);

        return view('web.parts._blog', compact('posts'));
    }

    public function post($slug)
    {
        $post = Blog::where('slug', $slug)
            ->where('type', 'Blog')
            ->first();

        return view('web.parts._post', compact('post'));
    }

    public function list()
    {
        $posts = Blog::all();

        return view('admin.parts._listBlog', compact('posts'));
    }

    public function create()
    {
        return view('admin.parts._createPost');
    }

    public function store(Request $request)
    {

        $post = new Blog;
        $post->user_id = auth()->user()->id;
        $post->slug = str_slug($request['title']);
        $post->body_plain = strip_tags($request['body']);
        $post->fill($request->all())->save();

        if ($request->photo) {
            $image = $request->file('photo');
            $input['photo'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'images/blog/thumbnail/';
            $img = Image::make($image->getRealPath());
            $img->resize(369, 242, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . $input['photo']);

            $destinationPath = 'images/blog';
            $image->move($destinationPath, $input['photo']);

            $post->photo = $input['photo'];
        }

        $post->update();

        return back();
    }
}
