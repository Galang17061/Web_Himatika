<?php

namespace App\Http\Controllers\frontend\profile;


use App\models;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    protected $model;

    public function profile()
    {
        return view('frontend.profile.profile');
    }
}
