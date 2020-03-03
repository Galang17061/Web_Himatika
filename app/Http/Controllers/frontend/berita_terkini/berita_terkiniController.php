<?php

namespace App\Http\Controllers\frontend\berita_terkini;


use App\models;
use App\Http\Controllers\Controller;

class berita_terkiniController extends Controller
{
    protected $model;

    public function berita_terkini()
    {
        return view('frontend.berita_terkini.berita_terkini');
    }
}
