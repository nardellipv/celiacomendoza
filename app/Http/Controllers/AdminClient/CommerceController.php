<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\ClientCommerceRequest;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Image;

class CommerceController extends Controller
{
    public function update(ClientCommerceRequest $request, $id)
    {

        $commerce = Commerce::find($id);

        $commerce->fill($request->all())->save();

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('images/thumbnail/logo/');
            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.$input['file']);

            $destinationPath = public_path('images/'.$commerce->name.'-'.$commerce->id.'/logo');
            $image->move($destinationPath, $input['file']);

            $commerce->logo = $input['file'];
        }

        $commerce->update();

        Session::flash('message', 'La información se actualizó correctamente');
        return back();
    }
}
