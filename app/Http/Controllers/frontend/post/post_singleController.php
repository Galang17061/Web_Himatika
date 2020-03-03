<?php

namespace App\Http\Controllers\frontend\post;


use App\models;
use App\Http\Controllers\Controller;

class post_singleController extends Controller
{
    protected $model;

    public function post()
    {
        return view('frontend.info_kemahasiswaan.post.post_single');
    }
}
