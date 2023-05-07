<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Learner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        $learner = Learner::where('email', $request->email)->first();

        if (!$learner || !Hash::check($request->password, $learner->password)) {
            return back()->with('error', 'Invalid credentials.');
        }

        Auth::login($learner);

        return redirect()->route('home')->with('success', 'You are logged in.');
    }
}
