<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateDataController extends Controller
{
    public function update(Request $request){
        $id = Auth::user()->id;
        
        $resto = app('firebase.firestore')->database()->collection('restaurant_data')->where('rid','==',$id)->documents();
        $iddoc = $resto->id();
        $res = app('firebase.firestore')->database()->collection('restaurant_data')->document($iddoc)
        ->update([
            ['path' => 'restoname','value' => $request->restaurant_name],
            ['path' => 'opday','value' => $request->operation_day],
            ['path' => 'optime','value' => $request->operation_time],
            ['path' => 'restotype','value' => $request->restaurant_type],
            ['path' => 'restolocation','value' => $request->restaurant_location]
        ]);

        if($res)
        {
            return redirect('/profilerestaurant')->with('status','Data Updated Successfully');
        }
    }
}
