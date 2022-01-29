<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Auth;

class InputController extends Controller
{

    public function _construct(Database $database)
    {
        $this->database = $database;
    }

    public function index(){
        return view('inputdata');
    }

    public function create(){
        return view('inputdata');
    }

    public function store(Request $request){
        $restoid = Auth::user()->id;
        $ref = app('firebase.firestore')->database()->collection('restaurant_data')->newDocument();
        $ref->set([
            'rid' => $restoid, 
            'restoimg' => "",
            'restoname' => $request->restaurant_name,
            'opday' => $request->operational_day,
            'optime' => $request->operational_time,
            'restotype' => $request->restaurant_type,
            'restolocation' => $request->restaurant_location,
        ]);
        if($ref)
        {
            return redirect('/profilerestaurant');
        }
        else{
            return redirect()->back();
        }
    }
}
