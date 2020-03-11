<?php

namespace App\Http\Controllers\frontend\info_kemahasiswaan\beasiswa;


use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class beasiswaController extends Controller
{
    protected $model;

    public function __construct(){
        $this->model = new models();
    }

    public function beasiswa()
    {
        $d_beasiswa_detail = $this->model->d_beasiswa_detail()->get();
        $d_beasiswa_image = $this->model->d_beasiswa_image()->with('d_beasiswa_detail')->paginate(5);
        return view('frontend.info_kemahasiswaan.beasiswa.beasiswa',compact('d_beasiswa_detail','d_beasiswa_image'));
    }

    public function beasiswa_single(Request $req){
        $data = $this->model->d_beasiswa_image()->with('m_category_beasiswa')->where('dpi_id',$req->id)->first();
        $m_category_beasiswa = $this->model->m_category_beasiswa()->get()->all();
        return view('frontend.info_kemahasiswaan.beasiswa.beasiswa_single',compact('data','m_category_beasiswa'));
    }
}
