<?php

namespace App\Controllers;

use App\Models\ThesisModel;

class Thesis extends BaseController
{
    protected $thesisModel;

    public function __construct()
    {
        $this->thesisModel = new ThesisModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Thesis',
            'thesis' => $this->thesisModel->findall()
        ];
        return view('v_home', $data);
    }
}
