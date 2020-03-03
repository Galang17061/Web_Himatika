<?php

namespace App\Http\Controllers\frontend\olimpiade;


use App\models;
use App\Http\Controllers\Controller;

class olimpiade_singleController extends Controller
{
    protected $model;

    public function olimpiade()
    {
        return view('frontend.info_kemahasiswaan.olimpiade.olimpiade_single');
    }
}
