<?php

namespace App\Http\Controllers;


use App\washmeuser;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin_login()
    {
        $username = request('username');
        $password = request('password');
        $user = washmeuser::find($username);
        if ($password == $user->password && $user->user_type == 3)
        {
            return view('adminPortal.admin', ['user' => $user]);
        }else
        {
            return redirect('/');
        }
    }
}
