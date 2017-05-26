<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\User;

class AdminController extends Controller
{
    //
	
	public function __construct() {
//		$this->middleware('auth');
	} 
	
	public function show(Request $request) {
		
		$user = Auth::user();
		
		if(!Auth::check()) {
//			return redirect('/login');
			
		$user = User::find(8);
		
//		Auth::guard('web')->login($user);
//		Auth::guard('web')->logout();
			
			Auth::loginUsingId(8);
			
		}
		
		if(Auth::viaRemember()) {
			echo 'yes';
		}
		
		dump(Auth::id());
		return view('welcome'); 
	}
}
