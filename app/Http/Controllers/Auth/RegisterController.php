<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\Unidad;

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
    protected $redirectTo = '/home';

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'idUnidad' => 'required|integer|max:56',
            'nombres' => 'required|string|max:50',
            'primerAp' => 'required|string|max:50',
            'segundoAp' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'numFiscal' => 'required|integer|max:100',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'idUnidad' => $data['idUnidad'],
            'nombres' => $data['nombres'],
            'primerAp' => $data['primerAp'],
            'segundoAp' => $data['segundoAp'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'numFiscal' => $data['numFiscal'],
        ]);
    }

    public function showRegistrationForm()
    {
        $unidades = Unidad::orderBy('id', 'ASC')->pluck('nombre', 'id');
        return view('auth.register')->with('unidades', $unidades);
    }
}
