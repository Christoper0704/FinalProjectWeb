<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Auth;
use Google\Cloud\Firestore\FirestoreClient;

class RestaurantProfileController extends Controller
{
    
    public function show(){
        $id = Auth::user()->id;
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
        
        $resto = app('firebase.firestore')->database()->collection('restaurant_data')->where('rid','==',$id)->documents();
        // $data = [
        //     "restoid"=>$resto->data()['rid'],
        //     "restoname" => $resto->data()['restoname'],
        //     "opday" => $resto->data()['opday'],
        //     "optime" => $resto->data()['optime'],
        //     "restolocation" => $resto->data()['restolocation'],
        //     "restotype" => $resto->data()['restotype'],
        // ];
        $restoimg = compact('image');
        return view('profile',['resto'=>$resto],$restoimg);
    }
}