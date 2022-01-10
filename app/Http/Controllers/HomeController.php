<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $uid = Session::get('uid');
            $user = app('firebase.auth')->getUser($uid);
            return view('home');
          } catch (\Exception $e) {
            return $e;
          }
    }

    public function customer()
    {
      $userid = Session::get('uid');
      return view('customers',compact('userid'));
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
