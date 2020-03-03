<?php

namespace App\Http\Controllers\frontend\contact;


use App\models;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    protected $model;

    public function contact()
    {
        return view('frontend.contact.contact');
    }
}
