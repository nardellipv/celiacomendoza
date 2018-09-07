<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\ClientCommerceRequest;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
//use Intervention\Image\ImageManagerStatic as Image;
use Image;

class CommerceController extends Controller
{
    public function update(ClientCommerceRequest $request, $id)
    {

        $commerce = Commerce::find($id);

//        $commerce->fill($request->all())->save();

//         dd($request->file('file'));

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('images/thumbnail/');
            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.$input['file']);

            $destinationPath = public_path('images/'.$commerce->name.'-'.$commerce->id.'/logo');
            $image->move($destinationPath, $input['file']);

//            dd($destinationPath.$input['file']);
            $commerce->logo = $input['file'];
        }

        $commerce->update();

        Session::flash('message', 'La información se actualizó correctamente');
        return back();
    }
}
