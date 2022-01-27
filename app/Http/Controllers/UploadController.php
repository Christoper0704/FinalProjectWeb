<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function upload(){
		return view('/');
	}
 
	public function proses_upload(Request $request){
		$id = Auth::user()->id;
		$image = $request->file('image'); //image file from frontend  
		$firebase_storage_path = 'RestaurantImage/';
		$localfolder = public_path('images') .'/';  
		$extension = $image->getClientOriginalExtension();  
		$file      = $id. '.' . $extension;  
		if ($image->move($localfolder, $file)) {  
			$uploadedfile = fopen($localfolder.$file, 'r');  
			app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $id]);  
			//will remove from local laravel folder  
			unlink($localfolder . $file);  
			echo 'success';  
		} else {  
			echo 'error';  
		}
		
		return back()->withInput();
	}
}
