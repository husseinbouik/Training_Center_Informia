<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;
use App\User;

class RegisterController extends Controller
{
     public function create()
        {
            return view('signup.blade.php');
        }
    
        public function store(RegistrationRequest $request)
        {
            $user = new Learner();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
    
            return redirect()->route('home');
        }
    }
    


