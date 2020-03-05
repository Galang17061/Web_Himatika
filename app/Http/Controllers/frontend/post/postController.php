<?php

namespace App\Http\Controllers\frontend\post;


use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class postController extends Controller
{
    protected $model;

    public function __construct(){
        $this->model = new models();
    }

    public function post()
    {
        $data = $this->model->m_category_post()->with('d_post_image')->with('d_post_detail')->get()->all();
        return view('frontend.post.post',compact('data'));
    }

    public function post_single(Request $req){
        $data = $this->model->m_category_post()->with('d_post_image')->with('d_post_detail')->where('mcp_id',1)->first();
        return view('frontend.post.post_single',compact('data'));
    }
}
