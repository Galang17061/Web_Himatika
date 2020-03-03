<?php

namespace App\Http\Controllers\frontend\beasiswa;


use App\models;
use App\Http\Controllers\Controller;

class beasiswa_singleController extends Controller
{
    protected $model;

    public function beasiswa()
    {
        return view('frontend.info_kemahasiswaan.beasiswa.beasiswa_single');
    }
}
