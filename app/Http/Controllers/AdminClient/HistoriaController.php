<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Blog;
use celiacomendoza\Commerce;
use celiacomendoza\User;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;
use Image;

class HistoriaController extends Controller
{

    public function show()
    {
        $commerce = Commerce::where('user_id', auth()->user()->id)
            ->first();

        return view('web.parts.adminClient._addHistoria', compact('commerce'));
    }

    public function create(Request $request)
    {
        $post = new Blog;
        $post->user_id = auth()->user()->id;
        $post->slug = str_slug($request['title']);
        $post->body_plain = strip_tags($request['body']);
        $post->type = 'Personal';
        $post->fill($request->all())->save();

        if ($request->photo) {
            $image = $request->file('photo');
            $input['photo'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'images/blog/thumbnail/';
            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . $input['photo']);

            $destinationPath = 'images/blog';
            $image->move($destinationPath, $input['photo']);

            $post->photo = $input['photo'];
        }else{
            $post->photo = 'nodispHistoria.png';
        }

        $post->update();

        return back();
    }

/*    public function create(Request $request)
    {
        dd('entro');
    }*/
}
