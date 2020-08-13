<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('v_home');
	}

	public function login()
	{
		return view('v_login');
	}

	//--------------------------------------------------------------------

}
