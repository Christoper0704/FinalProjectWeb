<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;
        $imageexpire = new \DateTime('tomorrow');
        $reference = app('firebase.storage')->getbucket()->object("avatar.jpg");

        if($reference->exists())
        {
            $image = $reference->signedUrl($imageexpire);
        }
        else
        {
            $image = null;
        }
        $restaurant = app('firebase.firestore')->database()->collection('restaurants_booking')->where('rid','==',$id)->documents();
        // $book = [
        //     "nama_resto" => $restaurant->data()['nama_resto'],
        //     "uid" => $restaurant->data()['uid'],
        //     "waktubooking" => $restaurant->data()['waktubooking'],
        // ];
        $userimage = compact('image');
        return view('booking',['book'=>$restaurant],$userimage);
    }

    public function accept($id)
    {
        $resto = app('firebase.firestore')->database()->collection('restaurants_booking')->document($id)
        ->update([
            ['path' => 'status','value' => 'accepted']
        ]);
        return redirect()->back();
    }

    public function cancel($id)
    {
        $resto = app('firebase.firestore')->database()->collection('restaurants_booking')->document($id)
        ->update([
            ['path' => 'status','value' => 'canceled']
        ]);
        return redirect()->back(); 
    }
}
