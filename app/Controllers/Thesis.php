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

        $currentPage = $this->request->getVar('pager_thesis') ? $this->request->getVar('pager_thesis') : 1;

        $keyword = $this->request->getVar('keyword');

       

        if ($keyword) {
            $thesis = $this->thesisModel->search($keyword);
        } else {
            $thesis = $this->thesisModel;
        }


        $data = [
            'title' => 'Daftar Thesis',
            'thesis' => $thesis->paginate(1, 'tbl_mhs'),
            'pager' => $this->thesisModel->pager,
            'currentPage' => $currentPage
        ];


        return view('thesis/index', $data);
    }
}
