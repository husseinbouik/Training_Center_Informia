<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('home');
    }
}
