<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;
use File;

class ControllerProducts extends Controller
{	
	// function untuk menampilkan list data produk pada mode admin
	public function index(Request $req){
		if(Auth::user()->role == 'admin'){			
			$dtpr 	 = DB::table('products')->orderby('product_code', 'asc')->get();							
			return view('readProduct', compact('dtpr'));
		}
		else{
			return redirect()->to('/login');
		}
	}
	
	// function untuk menampilkan form create data produk pada mode admin
	public function create(Request $req){
		if(Auth::user()->role == 'admin'){
			return view('createProduct');
		}
		else{
			return redirect()->to('/login');
		}
	}
	
	// function untuk menyambungkan create data produk ke database dan menambah data pada database
	public function process_create(Request $req){
		if(Auth::user()->role == 'admin'){
			try{
				$file 				= $req->file('photo');
				$extension			=['jpeg','jpg','png'];
				$extension_file 	= $file->getClientOriginalExtension();
				$size_file			= $file->getSize();
				$check				= in_array($extension_file,$extension);
				if($check){
					if ($size_file <= 1048576){
						$file_photo 	= $req->product_code.".".$file->getClientOriginalExtension();
						DB::table('products')->insert([
							'product_code'	=>$req->product_code,
							'photo'			=>$file_photo,
							'product_name'	=>$req->product_name,
							'category'		=>$req->category,
							'price'			=>$req->price,
							'product_desc'	=>$req->product_desc,							
						]);
						$destination 	= 'photo products';
						$file->move($destination,$file_photo);
						Session::flash('success', 'Create Data Success!');
					}
					else{
						Session::flash('failed', 'Size file max 1MB');
						return redirect()->back()->withInput();	
					}
				}
				else{
					Session::flash('failed', 'Acceptance extension file only : .jpeg, .jpg, dan .png');
					return redirect()->back()->withInput();	
				}
			}
			catch(QueryException $ex){
				Session::flash('failed', $req->product_code.' is already exist');
			}
			return redirect()->to('/product');
		}
		else{
			return redirect()->to('/login');
		}
    }
	
	// function untuk menampilkan form update data produk pada mode admin
	public function update(Request $req, $product_code){
		if(Auth::user()->role == 'admin'){
			$dtpr = DB::table('products')->where('product_code', $product_code)->first();
            return view('updateProduct', compact('dtpr'));
		}
		else{
			return redirect()->to('/login');
		}
	}	
	
	// function untuk menyambungkan update data produk ke database dan mengganti data produk pada database
	public function process_update(Request $req){
		if(Auth::user()->role == 'admin'){
			$product_code 		= $req->product_code;
			$product_name		= $req->product_name;
			$category			= $req->category;
			$price 				= $req->price;
			$product_desc		= $req->product_desc;
			try{
				if(empty($req->file('photo'))) {
					DB::table('products')	->where('product_code', $product_code)
											->update([
											'product_name'	=>$product_name, 
											'category'		=>$category, 
											'price'			=>$price, 
											'product_desc'	=>$product_desc]);
					Session::flash('success', 'Update Data Success!');
				}
				else{
					$file 				= $req->file('photo');
					$extension			= ['jpeg','jpg','png'];
					$extension_file 	= $file->getClientOriginalExtension();
					$size_file			= $file->getSize();
					$check				= in_array($extension_file,$extension);
					
					if($check){
						if ($size_file <= 1048576){
							$old  		= DB::table('products')->where('product_code', $product_code)
																->get();
										
							$file_photo 	= $req->product_code.".".$file->getClientOriginalExtension();
									
							DB::table('products')	->where('product_code', $product_code)
												->update([
												'photo' 	=> $file_photo,	'product_name' 	=> $product_name, 
												'category'	=>$category, 	'price' 		=> $price, 	
												'product_desc' => $product_desc]);
					
							foreach ($old as $o){
								unlink(public_path("photo products/".$o->photo));
							}
							
							$destination 	= 'photo products';
							$file->move($destination,$file_photo);
							
							Session::flash('success', 'Update Data Success!');
						}
						else{
							Session::flash('failed', 'Size file max 1MB');
							return redirect()->back()->withInput();	
						}
					}
					else{
						Session::flash('failed', 'Acceptance extension file only : .jpeg, .jpg, dan .png');
						return redirect()->back()->withInput();	
					}
					return redirect()->action('ControllerProducts@index');
				}
			}
			catch(QueryException $ex){
				Session::flash('failed', 'Update Data Failed!!');
			}
			return redirect()->to('/product');
		}
		else{
			return redirect()->to('/login');
		}	
    }
	
	// function untuk menghapus data produk dan menghapus data produk tersebut dalam database
	public function delete(Request $req, $product_code){
		if(Auth::user()->role == 'admin'){
			try{
				$file = DB::table('products')->where('product_code', $product_code)
											  ->get();
				
				DB::table('products')->where('product_code', $product_code)
									  ->delete();
				
				foreach ($file as $f){
					unlink(public_path("photo products/".$f->photo));
				}
				
				Session::flash('success', 'Delete Data Success!');
				return redirect()->to('/product');
			}
			catch(QueryException $ex){
				Session::flash('failed', 'Delete Data Failed!!');
			}
		}
		else{
			return redirect()->to('/login');
		}
	}
}
