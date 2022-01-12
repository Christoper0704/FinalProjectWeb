<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show()
    {
        $restaurant = app('firebase.firestore')->database()->collection('restaurants_booking')->document('OMQVwha7hqD47RFqBRf7')->snapshot();
        $book = [
            "nama_resto" => $restaurant->data()['nama_resto'],
            "uid" => $restaurant->data()['uid'],
            "waktubooking" => $restaurant->data()['waktubooking'],
        ];
        return view('booking',$book);
    }
}
