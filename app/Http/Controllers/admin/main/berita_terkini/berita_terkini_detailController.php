<?php

namespace App\Http\Controllers\admin\main\berita_terkini;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class berita_terkini_detailController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function berita_terkini_detail(Request $req)
    {
        $data = $this->model->d_berita_terkini_detail()->get();
        return view('admin.main.berita_terkini.berita_terkini_detail.berita_terkini_detail',compact('data'));
    }
    public function berita_terkini_detail_create()
    {
        $m_category_berita_terkini = $this->model->m_category_berita_terkini()->get()->all();
        return view('admin.main.berita_terkini.berita_terkini_detail.berita_terkini_detail_create',compact('m_category_berita_terkini'));
    }
    public function berita_terkini_detail_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_berita_terkini_detail()->max('dbtd_id')+1;

            // Save
            $simpan = $this->model->d_berita_terkini_detail()->create([
                'dbtd_id'=>$id,
                'dbtd_category'=>$req->dbtd_category,
                'dbtd_title'=>$req->dbtd_title,
                'dbtd_description'=>$req->dbtd_description,
            ]);
            DB::commit();
            return redirect('/main/berita_terkini_detail');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect('/main/berita_terkini_detail/create');
        }
    }

    public function berita_terkini_detail_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_berita_terkini_detail()->where('dbtd_id',$req->id)->get()->first();
        return view('admin.main.berita_terkini.berita_terkini_detail.berita_terkini_detail_edit',compact('data'));
    }

    public function berita_terkini_detail_update(Request $req)
    {
        return $req->all();
        $simpan = $this->model->d_berita_terkini_detail()->where('dbtd_id',$req->dbtd_id)->update([
            'dbtd_title'=>$req->dbtd_title,
            'dbtd_description'=>$req->dbtd_description,
        ]);
        return redirect('/main/berita_terkini_detail');
    }

    public function berita_terkini_detail_delete(Request $req)
    {
        // unlink(storage_path('app/public/images/berita_terkini/berita_terkini_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_berita_terkini_detail()->where('dbtd_id',$req->id)->delete();
        $berita_terkini_image_delete = $this->model->d_berita_terkini_image()->where('dbti_title',$req->id)->delete();
        return redirect('/main/berita_terkini_detail');
    }
}
