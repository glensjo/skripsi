<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cookie;

class ControllerLogin extends Controller
{
    // function untuk menampilkan form login pada mode guest
	public function index(){
		return view('login');
	}
		
	// function untuk login menggunakan data pada database
	public function process_login(Request $req){
		$user = $req->email;
        $pass = $req->password;
		$rem  = $req->remember;
		
		$login = DB::table('user')->where('email', $user)
								  ->where('password',md5($pass))
								  ->first();

		if($login){
			$dtuser = DB::table('user')->where('email',$user)
										   ->first();
			session(['user' => $user, 'name' => $dtuser->name]);
			if($rem){
				Cookie::queue('cookieUser', $user, 60*365);
				Cookie::queue('cookiePass', $pass, 60*365);
			}
			return redirect()->action([ControllerDashboard::class, 'index']);			
		}		
		else{
			Session::flash('failed', 'Wrong Username or Password');
			return redirect()->action([ControllerLogin::class, 'index']);			
		}
	}
	
	// function untuk logout dari session
	public function process_logout(Request $req){
		Session::flush();
		if(!($req->session()->has('user'))){
			return redirect()->action([ControllerLogin::class, 'index']);
		}
	}
}