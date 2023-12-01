<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cookie;

class ControllerView extends Controller
{
    // function untuk menampilkan data produk pada mode guest yang bisa di akses juga saat mode admin
	public function index(){
		$dtpr = DB::table('products')->orderby('product_code', 'asc')->get();
		return view('viewProducts', compact('dtpr'));
	}
	
	// function untuk menampilkan detail data produk pada mode guest yang bisa di akses juga saat mode admin
	public function detail($product_code){		
		$dtpr = DB::table('products')->where('product_code', $product_code)->first();
        return view('viewDetail', compact('dtpr'));
	}
}
