<?php

namespace App\Http\Controllers;
use App\models;

class IndexController extends Controller
{

    protected $model;

    public function __construct()
    {
        $this->model = new models();
    }

    public function index()
    {
        $data = $this->model->d_post_detail()->orderByDesc('dpd_created_at')->get()->take(2);
        return view('index',compact('data'));
    }
}
