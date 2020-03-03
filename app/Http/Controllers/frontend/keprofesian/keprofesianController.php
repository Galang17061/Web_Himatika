<?php

namespace App\Http\Controllers\frontend\keprofesian;


use App\models;
use App\Http\Controllers\Controller;

class keprofesianController extends Controller
{
    protected $model;

    public function keprofesian()
    {
        return view('frontend.keprofesian.keprofesian');
    }
}
