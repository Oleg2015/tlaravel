<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
//	protected $request;
//	
//	public function __construct(Request $request) {
//		$this->request = $request;
//	}
    
		public function show(Request $request,$name = FALSE) {

//			if($request->isMethod('post')) {
//
//				$rules = [
//					'name'=>'required|max:10',
//					'email'=>'required|email'
//				];
//
//				$this->validate($request,$rules);
//
//				dump($request->all());
//				
//			}
			
//				print_r($request->all());
			
//				echo '<h1 style="margin-top:50px">'.$request->input('name','Default').'</h1>';
				echo '<h1 style="margin-top:50px">'.$request->name.'</h1>';
			
			  return view('default.contact',['title'=>'Contacts']);
		  }
}