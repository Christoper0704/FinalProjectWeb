<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateDataController extends Controller
{
    public function index($id){
        $resto = app('firebase.firestore')->database()->collection('restaurant_data')->document($id);
        return view('updateprofile',['id' => $id, 'resto' => $resto]);
    }

    public function update(Request $request){
        $id = Auth::user()->id;

        $res = app('firebase.firestore')->database()->collection('restaurant_data')->document($request->id)
        ->update([
            ['path' => 'restoname','value' => $request->restaurant_name],
            ['path' => 'opday','value' => $request->operational_day],
            ['path' => 'optime','value' => $request->operational_time],
            ['path' => 'restotype','value' => $request->restaurant_type],
            ['path' => 'restolocation','value' => $request->restaurant_location]
        ]);
        
        return redirect('/profilerestaurant')->with('status','Data Updated Successfully');
    }
}
