<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Auth;

class RestaurantProfileController extends Controller
{
    
    public function show(){
        $id = Auth::id();
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
        
        $resto = app('firebase.firestore');
        $restoref= $resto->collection('restaurant_data');
        $query = $restoref->where('restoid','=',$id);
        $snapshot = $query->documents();
        $data = [
            "restoid"=>$snapshot->data()['restoid'],
            "restoname" => $snapshot->data()['restoname'],
            "opday" => $snapshot->data()['opday'],
            "optime" => $snapshot->data()['optime'],
            "restolocation" => $snapshot->data()['restolocation'],
            "restotype" => $snapshot->data()['restotype'],
        ];
        $restoimg = compact('image');
        return view('profile',$data,$restoimg);
    }
}