<?php

namespace celiacomendoza\Http\Controllers\AdminClient;

use celiacomendoza\Http\Requests\ClientePersonalRequest;
use celiacomendoza\User;
use Illuminate\Http\Request;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PersonController extends Controller
{
    public function update(ClientePersonalRequest $request, $id)
    {
        $user = User::find($id);

        //controlo de que sea el mismo usuario
//        $this->authorize('PersonPass', $user);

        if(!$request->password) {
            $user->fill($request->except('password'))->save();
        }else{
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
        }

        Session::flash('message', 'La información se actualizó correctamente');
        return back();
    }
}
