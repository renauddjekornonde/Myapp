<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $request;

    function __construct(Request $request){
        $this->request= $request;
    }

    //page/vue de register.blade.php
    public function logout(){
       Auth::logout();
       return redirect()->route('login');
    }

    public function existEmail(){
        $email= $this->request->input('email');

        $user = User::where('email', $email)
                    ->first();

        $response="";

        ($user) ? $response ="exist" : $response="not_exist";

        return response()->json([
            'response' =>$response
        ]);
    }

    //verifier si l'utilisateur à deja activer son compte ou pas avant d'etre authentifier
    public function userChecker(){
        $activation_token= Auth::user()->activation_token;
        $is_verified= Auth::user()->is_verified;

        if($is_verified !=1){

            Auth::logout();

            return redirect()->route('app_activation_code', ['token'=> $activation_token])
            ->with('Warning', 'Your account is not activate yet, please check your mail-box and activated your account or resend the confirmation message');
        }
        else{
            return redirect()->route('app_dashbord');
        }
    }

    public function activation_code($token){
        return view('auth.activation_code', [
            'token'=>$token
        ]);
    }

}
