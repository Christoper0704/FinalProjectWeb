<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function show()
    {
        $id = Auth::user()->id;
        $restaurant = app('firebase.firestore')->database()->collection('restaurants_booking')->where('rid','==',$id)->documents();
        // $book = [
        //     "nama_resto" => $restaurant->data()['nama_resto'],
        //     "uid" => $restaurant->data()['uid'],
        //     "waktubooking" => $restaurant->data()['waktubooking'],
        // ];
        return view('booking',['book'=>$restaurant]);
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
            ['path' => 'status','value' => 'cancelled']
        ]);
        return redirect()->back(); 
    }

    public function finish($id)
    {
        $resto = app('firebase.firestore')->database()->collection('restaurants_booking')->document($id)
        ->update([
            ['path' => 'status','value' => 'finished']
        ]);
        return redirect()->back(); 
    }
}
