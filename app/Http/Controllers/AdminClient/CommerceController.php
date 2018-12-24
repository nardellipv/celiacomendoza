<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Commerce;
use celiacomendoza\Http\Requests\ClientCommerceRequest;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Image;

class CommerceController extends Controller
{
    public function update(ClientCommerceRequest $request, $id)
    {
        $commerce = Commerce::find($id);

        //controlo de que sea el mismo comercio que el dueño
        $this->authorize('CommercePass', $commerce);

        $commerce->fill($request->all())->save();

        if ($request->file) {
            $image = $request->file('file');
            $input['file'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = 'images/thumbnail/logo/';
            $img = Image::make($image->getRealPath());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.$input['file']);

            $destinationPath = 'images/'.$commerce->name.'-'.$commerce->id.'/logo';
            $image->move($destinationPath, $input['file']);

            $commerce->logo = $input['file'];
        }

        $commerce->update();

        Session::flash('message', 'La información se actualizó correctamente');
        return back();
    }
}
