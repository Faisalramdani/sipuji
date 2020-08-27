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

    public function profile()
    {
        return view('user/v_profile');
    }

    public function thesis()
    {
        return view('user/v_post_thesis');
    }

    public function registered_thesis()
    {
        return view('user/v_registered_thesis');
    }

    public function applied_thesis()
    {
        return view('user/v_applied_thesis');
    }

    //--------------------------------------------------------------------

}
