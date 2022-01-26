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
		$resto   = app('firebase.firestore')->database()->collection('restaurant_data')->where('rid','==',$id)->documents();  
		$firebase_storage_path = 'RestaurantImage/';
		foreach($resto as $res)
		{
			$name = $res->data()['rid'];  
		}
		$localfolder = public_path('firebase-temp-uploads') .'/';  
		$extension = $image->getClientOriginalExtension();  
		$file      = $name. '.' . $extension;  
		if ($image->move($localfolder, $file)) {  
			$uploadedfile = fopen($localfolder.$file, 'r');  
			app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path . $name]);  
			//will remove from local laravel folder  
			unlink($localfolder . $file);  
			echo 'success';  
		} else {  
			echo 'error';  
		}  
	}
}
