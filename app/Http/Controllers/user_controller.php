<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class user_controller extends Controller
{
    public function login(Request $request) {
        $usernaam = $request->get('usernaam');
        $password = $request->get('password');
        $result = DB::table('users')->where('usernaam', $usernaam && 'password', $password)->exists();
        if ($result) {
            $session = $request->session()->get('loggedin');
            return redirect('/', ['loggedin' => $session, 'user' => $usernaam]);
        }
        else {
           return redirect('inloggen');
        }

    }

    public function register(Request $request) {
        $usernaam = $request->get('usernaam');
        $password = $request->get('password');
        $passwordcheck = $request->get('passwordcheck');
        if ($password == $passwordcheck) {
            DB::insert('INSERT INTO wishes(`usernaam`, `password`) VALUES(?, ?)', [
                $usernaam,
                $password,
            ]);
            return redirect('inloggen');
        }
        else {
          return redirect('registreren');
        }
    }
}
