<?php

namespace celiacomendoza\Http\Controllers\AdminCeliac;

use celiacomendoza\Commerce;
use celiacomendoza\User;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.parts._editUser', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);

        $user->fill($request->except('password'))->save();

        return back();
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $commerce = Commerce::find($id);
        $user->delete();

//        borro carpeta del comercio
        File::deleteDirectory('images/'.$commerce->name.'-'.$user->id);

        return back();
    }
}
