<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Void_;

class LogoutController extends Controller
{
    use AuthenticatesUsers;

    var $user_id = Auth::user()->id;
    
    public function logout(Request $request) {
        Auth::logout();
        $accessToken = auth()->user()->token();
        $token= $request->user()->tokens->find($accessToken);
        $token->revoke();
        return redirect('/');
    }
}
