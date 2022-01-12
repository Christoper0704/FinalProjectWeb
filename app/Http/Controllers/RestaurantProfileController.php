<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class RestaurantProfileController extends Controller
{
    
    public function show(){
        $imageexpire = new \DateTime('tomorrow');
        $reference = app('firebase.storage')->getbucket()->object("resto1.jpg");

        if($reference->exists())
        {
            $image = $reference->signedUrl($imageexpire);
        }
        else
        {
            $image = null;
        }
        $resto = app('firebase.firestore')->database()->collection('restaurant_data')->document('4b5e7cf34a464e55981b')->snapshot();
        $data = [
            "restoname" => $resto->data()['restoname'],
            "opday" => $resto->data()['opday'],
            "optime" => $resto->data()['optime'],
            "restolocation" => $resto->data()['restolocation'],
            "restotype" => $resto->data()['restotype'],
        ];
        $restoimg = compact('image');
        return view('profile',$data,$restoimg);
    }
}
