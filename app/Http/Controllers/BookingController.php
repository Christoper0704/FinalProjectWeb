<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show()
    {
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
        $restaurant = app('firebase.firestore')->database()->collection('restaurants_booking')->document('OMQVwha7hqD47RFqBRf7')->snapshot();
        $book = [
            "nama_resto" => $restaurant->data()['nama_resto'],
            "uid" => $restaurant->data()['uid'],
            "waktubooking" => $restaurant->data()['waktubooking'],
        ];
        $userimage = compact('image');
        return view('booking',$book,$userimage);
    }
}
