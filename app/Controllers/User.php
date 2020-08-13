<?php

namespace App\Controllers;

class User extends BaseController
{
    public function dashboard()
    {
        return view('user/v_dashboard');
    }

    public function login()
    {
        return view('user/v_login');
    }

    public function register()
    {
        return view('user/v_register');
    }

    //--------------------------------------------------------------------

}
