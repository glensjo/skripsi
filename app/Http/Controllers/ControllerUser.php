<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Session;

class ControllerUser extends Controller
{	
	// function untuk menampilkan list data user pada mode admin
	public function index(Request $req){
		if(Auth::user()->role == 'admin'){
			if(isset($_GET['keyword'])){
				$keyword = $req->keyword;
				$dtuser 	 = DB::table('users')
									->where('email', 'like', '%'.$keyword.'%')
									->orWhere('name', 'like', '%'.$keyword.'%')									
									->get();
			}
			else{
				$dtuser 	 = DB::table('users')->orderby('id', 'asc')->get();				
			}
			return view('readUser', compact('dtuser'));
		}
		else{
			return redirect()->to('/login');
		}		
	}
	
	// function untuk menampilkan form add data user pada mode admin
	public function create(Request $req){
		if(Auth::user()->role == 'admin'){			
			return view('createUser');
		}
		else{
			return redirect()->to('/login');
		}
	}
	
	// function untuk menyambungkan add data user ke database dan menambah data pada database
	public function process_create(Request $req){
		if(Auth::user()->role == 'admin'){
			try{			
				DB::table('users')->insert([
					'name'		=>$req->name,
					'email'		=>$req->email,
					'password'	=>md5($req->password)
				]);
				Session::flash('success', 'Create User Success!');
				return redirect()->to('/user');
			}
			catch(QueryException $ex){
				Session::flash('failed', $req->id.' is already exist!!');
			}
		}
		else{
			return redirect()->to('/login');
		}
    }
	
	// function untuk menampilkan form update data user pada mode admin
	public function update(Request $req, $id){
		if(Auth::user()->role == 'admin'){
			$dtuser = DB::table('users')->where('id', $id)->first();
            return view('updateUser', compact('dtuser'));
		}
		else{
			return redirect()->to('/login');
		}
	}
	
	// function untuk menyambungkan update data user ke database dan mengganti data user pada database
	public function process_update(Request $req){
		if(Auth::user()->role == 'admin'){
			$id		= $req->id;
			$name	= $req->name;
			$email	= $req->email;			
			try{
				if(empty($req->password)){
					DB::table('users')->where('id', $id)
									 ->update(['name' => $name,	'password' => $password]);
				}
				else{
					DB::table('users')->where('id', $id)
									 ->update(['password' => md5($req->password), 
									 'name' => $name,	'email' => $email]);
				}
				
				if(Session::get('users')==$id){
					Session::flash('success', 'Please Log In Again!');
					return redirect()->to('/logout');
				}				
				Session::flash('success', 'Update User Success!');
				return redirect()->to('/user');
			}
			catch(QueryException $ex){
				Session::flash('failed', 'Update User Failed!!');
				return redirect()->to('/user');
			}
		}
		else{
			return redirect()->to('/login');
		}
    }
	
	// function untuk menghapus data user dan menghapus data user tersebut dalam database
	public function delete(Request $req, $id){
		if(Auth::user()->role == 'admin'){
			try{
				DB::table('users')->where('id', $id)
								 ->delete();
				Session::flash('success', 'Delete User Success!');
				if(Session::get('users')==$id){
					return redirect()->to('/logout');
				}
				return redirect()->to('/user');
			}
			catch(QueryException $ex){
				Session::flash('failed', 'Delete User Failed!!');
			}
		}
		else{
			return redirect()->to('/login');
		}
	}
}