<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class LoginController extends Controller
{
    public function login(Request $request) {
        $username = Input::get('Username');
        $password = Input::get('Password');

        $this->validate($request, [
            'Username' => 'required',
            'Password' => 'required',
        ]);

        $userDB = DB::table('login')->where('Username',$username)->first();
        $passDB = DB::table('login')->where('Password',$password)->first();
        if($userDB != null)
        {
            //dd($userDB);
            $passwordDB = $userDB->Password;
            //dd($password);
                if($passwordDB == $password) {
                    return redirect()->route('homehome');
                }
                // elseif ($passDB == null) {
                //     $pesan = 'Password Field Empty';
                //     return view('login', ['message' => $pesan]);
                // }
                else {
                    $message = 'Wrong Password';
                    return view('login', ['message' => $message]);
                }
        
        }
        else {
            $message = 'Wrong Username';
            return view('login', ['message' => $message]);
        }
    }
}