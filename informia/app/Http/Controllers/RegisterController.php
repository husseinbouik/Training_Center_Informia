<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:learners',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $learner = new Learner();
        $learner->first_name = $request->first_name;
        $learner->last_name = $request->last_name;
        $learner->email = $request->email;
        $learner->password = bcrypt($request->password);
        $learner->save();

        return redirect()->route('home')->with('success', 'Your account has been created.');
    }
}
