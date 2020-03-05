<?php

namespace App\Http\Controllers\frontend\keprofesian;


use App\models;
use App\Http\Controllers\Controller;

class keprofesian_singleController extends Controller
{
    protected $model;

    public function keprofesian()
    {
        return view('frontend.info_kemahasiswaan.keprofesian.keprofesian_single');
    }
}
