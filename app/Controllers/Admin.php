<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/v_dashboard');
    }

    public function login()
    {
        return view('admin/v_login');
    }

    public function register()
    {
        return view('admin/v_register');
    }

    //--------------------------------------------------------------------

}
