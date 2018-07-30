<?php

namespace App\Http\Controllers\Auth;

use App\Member;
use App\Http\Controllers\Controller;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;

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
    protected $redirectTo = '/projects';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Member
     */
    protected function create(array $data) /**/
    {
        /*$user = auth()->user();

        $test = $data->all();

        $data['image'] = $user->image;
        if ($data->hasFile('image') && $data->file('image')->isValid()) {
            if($user->image)
                $name = $user->image;
            else
                $name = $user->id.kebab_case($user->name);

            $extension = $data->image->extension();
            $nameFile = "{$name}.{$extension}";

            dd($nameFile);
        }*/

        date("d/M/Y", strtotime('birth'));

        return User::create([
            'name' => $data['name'],
            'last' => $data['last'],
            'birth' => $data['birth'],
            'ability' => $data['ability'],
            'tel' => $data['tel'],
            'image' => $data['image'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
