<?php

namespace App\Http\Controllers\frontend\profile;


use App\models;
use App\Http\Controllers\Controller;

class profile_singleController extends Controller
{
    protected $model;

    public function profile()
    {
        return view('frontend.info_kemahasiswaan.profile.profile_single');
    }
}
