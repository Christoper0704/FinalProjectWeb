<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class RestaurantProfileController extends Controller
{

    public function show(){
        $resto = app('firebase.firestore')->database()->collection('restaurant_data')->document('4b5e7cf34a464e55981b')->snapshot();
        $data = [
            "restoname" => $resto->data()['restoname'],
            "opday" => $resto->data()['opday'],
            "optime" => $resto->data()['optime'],
            "restolocation" => $resto->data()['restolocation'],
            "restotype" => $resto->data()['restotype'],
        ];
        return view('profile',$data);
    }
}
