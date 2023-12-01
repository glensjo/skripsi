<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Models\User;
use Session;

class ControllerRegister extends Controller
{	
	public function create()
    {
        return view('register');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
			'role' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password', 'role']));
        
        auth()->login($user);
        
        return redirect()->to('/dashboard');
    }
}