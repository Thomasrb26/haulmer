<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class newController extends Controller
{

    public function create()
    {
        return view('auth.new');

    }
    public function info()
    {
        $user = User ::create(request(['name','email','password']));

        auth()->login($user);
        return redirect()->to('/');
    }
    
}
