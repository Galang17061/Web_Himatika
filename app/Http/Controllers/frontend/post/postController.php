<?php

namespace App\Http\Controllers\frontend\post;


use App\models;
use App\Http\Controllers\Controller;

class postController extends Controller
{
    protected $model;

    public function post()
    {
        return view('frontend.post.post');
    }
}
