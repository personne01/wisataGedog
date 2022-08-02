<?php

namespace App\Controllers;

use App\Models\WisataModel;

class Pages extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->wisataModel = new WisataModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home | Wisata Gedog Awesome',
            'nav' => 'Home',
            'wisata' => $this->wisataModel->findAll()

        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About | Sivax - Sistem Informasi Vaksin',
            'nav' => 'Page',

        ];
        return view('pages/about', $data);
    }
}
