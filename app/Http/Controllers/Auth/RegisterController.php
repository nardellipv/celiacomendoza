<?php

namespace celiacomendoza\Http\Controllers\Auth;

use celiacomendoza\Commerce;
use celiacomendoza\User;
use celiacomendoza\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/cliente-perfil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \celiacomendoza\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'type' => $data['type'],
            'password' => Hash::make($data['password']),
        ]);

//        por si se repite el nombre del comercio, se crea otro slug
        $slug = str_slug($data['nameCommerce']);
        $slugCount = Commerce::where('slug', $slug)
            ->count();

            if ($slugCount == 0) {
                $commerce = Commerce::create([
                    'name' => $data['nameCommerce'],
                    'province_id' => $data['province_id'],
                    'user_id' => $user->id,
                    'slug' => str_slug($data['nameCommerce']),
                ]);
            } else {
                $commerce = Commerce::create([
                    'name' => $data['nameCommerce'],
                    'province_id' => $data['province_id'],
                    'user_id' => $user->id,
                    'slug' => str_slug($data['nameCommerce'] . rand(0, 100)),
                ]);
            }

        Storage::put('public/' . $commerce->user_id .'-'. $commerce->user->name, '0');
        return $user;
    }
}
