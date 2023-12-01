<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
use Cookie;

class ControllerSession extends Controller
{
    public function create()
    {
        return view('login');
    }
	
	
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email must be filled',
            'password.required' => 'Password must be filled'
        ]);
        
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)){
            if (Auth::user()->role == 'admin') {
                return redirect()->to('/adminpage');
            } else {
                return redirect()->to('/dashboard');
            }
            
        } else {
            return back()->withErrors(
                'The email or password is incorrect, please try again'
            )->withInput();
        }
        

		// $user = $request->email;
        // $pass = $request->password;
		// $rem  = $request->remember;
		
		// $login = DB::table('users')->where('email', $user)
		// 						  ->where('password',md5($pass))
		// 						  ->first();

		// if($login){
		// 	$dtuser = DB::table('users')->where('email',$user)
		// 								   ->first();
		// 	session(['users' => $user, 'name' => $dtuser->name]);
		// 	if($rem){
		// 		Cookie::queue('cookieUser', $user, 60*365);
		// 		Cookie::queue('cookiePass', $pass, 60*365);
		// 	}
		// 	return redirect()->to('/dashboard');			
		// }		
		// else{
		// 	Session::flash('failed', 'Wrong Username or Password');
		// 	return redirect()->to('/login');			
		// }
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }
}
