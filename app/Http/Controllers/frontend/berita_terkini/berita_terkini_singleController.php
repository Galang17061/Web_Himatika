<?php

namespace App\Http\Controllers\frontend\berita_terkini;


use App\models;
use App\Http\Controllers\Controller;

class berita_terkini_singleController extends Controller
{
    protected $model;

    public function berita_terkini()
    {
        return view('frontend.info_kemahasiswaan.berita_terkini.berita_terkini_single');
    }
}
