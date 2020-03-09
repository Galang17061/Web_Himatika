<?php

namespace App\Http\Controllers\frontend\profile;


use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;

class profileController extends Controller
{

    protected $model;

    public function __construct(){
        $this->model = new models();
    }

    public function profile()
    {
        $data = $this->model->m_departement_detail()->get()->all();
        return view('frontend.profile.profile',compact('data'));
    }
}