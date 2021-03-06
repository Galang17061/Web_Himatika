<?php

namespace App\Http\Controllers\frontend\post;


use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    protected $model;

    public function __construct(){
        $this->model = new models();
    }

    public function post()
    {
        $d_post_detail = $this->model->d_post_detail()->get();
        $d_post_image = $this->model->d_post_image()->orderByDesc('dpi_id')->with('d_post_detail')->paginate(5);
        return view('frontend.post.post',compact('d_post_detail','d_post_image'));
    }

    public function post_single(Request $req){
        $data = $this->model->d_post_image()->with('m_category_post')->where('dpi_id',$req->id)->first();
        $m_category_post = $this->model->m_category_post()->get()->all();
        return view('frontend.post.post_single',compact('data','m_category_post'));
    }
}
