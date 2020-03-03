<?php

namespace App\Http\Controllers\frontend\olimpiade;


use App\models;
use App\Http\Controllers\Controller;

class olimpiadeController extends Controller
{
    protected $model;

    public function olimpiade()
    {
        return view('frontend.info_kemahasiswaan.olimpiade.olimpiade');
    }
}
