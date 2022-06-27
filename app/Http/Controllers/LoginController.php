<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.login');
    }
    public function login(LoginRequest $request){
        $credentials=$request->getCredentials();
        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('Username and/or password is incorrect');
        }
        $user=Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request,$user);
    }
    public function authenticated(Request $request,$user){
        return redirect()->to('/home');
    }
}
