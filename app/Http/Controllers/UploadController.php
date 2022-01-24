<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
		return view('/');
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
		]);

 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$restaurantimg = app('firebase.firestore')->database()->collection('restaurant_image')->document('LM3S8CJcPBUAQKBWTJFI');
		$firebase_storage_path = 'RestaurantImage/';
		$name     = $restaurantimg->id();
		$localfolder = public_path('firebase-temp-uploads') .'/';
		$extension = $file->getClientOriginalExtension();
		$files      = $name. '.' . $extension;

		if ($file->move($localfolder, $files)) {
			$uploadedfile = fopen($localfolder.$files, 'r');
			app('firebase.storage')->getBucket()->upload($uploadedfile, ['name' => $firebase_storage_path .$files]);
			//will remove from local laravel folder
			unlink($localfolder . $files);
			Session::flash('message', 'Succesfully Uploaded');
		  }

		$path = Storage::putFile(
            'images',
            $request->file('file')
        );
 
      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
 
      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
 
      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
 
      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';
 
      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'images';
 
                // upload file
		$file->move($tujuan_upload,$file->getClientOriginalName());

		return back()
            ->withInput();
	}
}
