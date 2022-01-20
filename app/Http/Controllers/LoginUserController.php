<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class LoginUserController extends Controller
{
    public function _construct(Database $database)
    {
        $this->database = $database;
    }

    public function index()
    {
        return view('login');
    }

    public function loginuser()
    {
        return view('login');
    }
    
    public function check(Request $request)
    {
        $login = app('firebase.firestore')->database()->collection('restaurant_account');
        foreach($login as $log){
            if($request->email==$log->data()['email'])
            {
                if($request->password==$log->data()['password'])
                {
                    return redirect('/inputdata');
                }
                else
                {
                    return redirect('/login');
                }
            }
        }
    }
}
