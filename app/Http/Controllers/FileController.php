<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request){
        $resto = Restaurant::find(Auth::user()->id);
    }
}
