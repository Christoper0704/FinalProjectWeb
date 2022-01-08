<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function create(){
        $user = User::find(Auth::user()->id);

        return view(['home','user' => $user]);
    }

    public function addDataResto(Request $request){
        $resto = Restaurant::create([
            'restaurant_image'=>$request->irestaurant_image,
            'restaurant_name'=> $request->restaurant_name,
            'operational_day'=>$request->operational_day,
            'operational_time'=>$request->operational_time,
            'restaurant_type'=>$request->restaurant_type,
            'restaurant_location'=>$request->restaurant_location
        ]);

        $resto->restaurant_id = Auth::user()->id;
        $resto->save();
    }
}
