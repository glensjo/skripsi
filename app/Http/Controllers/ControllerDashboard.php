<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ControllerDashboard extends Controller
{
    // function untuk menampilkan dashboard pada mode admin
	public function index(Request $request){
		if($request->session()->has('users')){
			return view('dashboard');
		}
		else{
			return redirect()->action([ControllerSession::class, 'create']);
		}
	}
}
