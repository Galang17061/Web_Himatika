<?php

namespace App\Http\Controllers\admin\main\olimpiade;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class olimpiade_detailController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function olimpiade_detail(Request $req)
    {
        $data = $this->model->d_olimpiade_detail()->get();
        return view('admin.main.olimpiade.olimpiade_detail.olimpiade_detail',compact('data'));
    }
    public function olimpiade_detail_create()
    {
        $m_category_olimpiade = $this->model->m_category_olimpiade()->get()->all();
        return view('admin.main.olimpiade.olimpiade_detail.olimpiade_detail_create',compact('m_category_olimpiade'));
    }
    public function olimpiade_detail_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_olimpiade_detail()->max('dod_id')+1;

            // Save
            $simpan = $this->model->d_olimpiade_detail()->create([
                'dod_id'=>$id,
                'dod_category'=>$req->dod_category,
                'dod_title'=>$req->dod_title,
                'dod_description'=>$req->dod_description,
            ]);
            DB::commit();
            return redirect('/main/olimpiade_detail');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect('/main/olimpiade_detail/create');
        }
    }

    public function olimpiade_detail_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_olimpiade_detail()->where('dod_id',$req->id)->get()->first();
        return view('admin.main.olimpiade.olimpiade_detail.olimpiade_detail_edit',compact('data'));
    }

    public function olimpiade_detail_update(Request $req)
    {
        return $req->all();
        $simpan = $this->model->d_olimpiade_detail()->where('dod_id',$req->dod_id)->update([
            'dod_title'=>$req->dod_title,
            'dod_description'=>$req->dod_description,
        ]);
        return redirect('/main/olimpiade_detail');
    }

    public function olimpiade_detail_delete(Request $req)
    {
        // unlink(storage_path('app/public/images/olimpiade/olimpiade_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_olimpiade_detail()->where('dod_id',$req->id)->delete();
        $olimpiade_image_delete = $this->model->d_olimpiade_image()->where('doi_title',$req->id)->delete();
        return redirect('/main/olimpiade_detail');
    }
}
