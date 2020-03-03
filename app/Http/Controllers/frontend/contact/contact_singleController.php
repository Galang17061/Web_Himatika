<?php

namespace App\Http\Controllers\frontend\contact;


use App\models;
use App\Http\Controllers\Controller;

class contact_singleController extends Controller
{
    protected $model;

    public function contact()
    {
        return view('frontend.info_kemahasiswaan.contact.contact_single');
    }
}
