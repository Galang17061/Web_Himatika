<?php

namespace App\Http\Controllers\admin\main\keprofesian;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class keprofesian_detailController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function keprofesian_detail(Request $req)
    {
        $data = $this->model->d_keprofesian_detail()->get();
        return view('admin.main.keprofesian.keprofesian_detail.keprofesian_detail',compact('data'));
    }
    public function keprofesian_detail_create()
    {
        $m_category_keprofesian = $this->model->m_category_keprofesian()->get()->all();
        return view('admin.main.keprofesian.keprofesian_detail.keprofesian_detail_create',compact('m_category_keprofesian'));
    }
    public function keprofesian_detail_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_keprofesian_detail()->max('dkd_id')+1;

            // Save
            $simpan = $this->model->d_keprofesian_detail()->create([
                'dkd_id'=>$id,
                'dkd_category'=>$req->dkd_category,
                'dkd_title'=>$req->dkd_title,
                'dkd_description'=>$req->dkd_description,
            ]);
            DB::commit();
            return redirect('/main/keprofesian_detail');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect('/main/keprofesian_detail/create');
        }
    }

    public function keprofesian_detail_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_keprofesian_detail()->where('dkd_id',$req->id)->get()->first();
        return view('admin.main.keprofesian.keprofesian_detail.keprofesian_detail_edit',compact('data'));
    }

    public function keprofesian_detail_update(Request $req)
    {
        return $req->all();
        $simpan = $this->model->d_keprofesian_detail()->where('dkd_id',$req->dkd_id)->update([
            'dkd_title'=>$req->dkd_title,
            'dkd_description'=>$req->dkd_description,
        ]);
        return redirect('/main/keprofesian_detail');
    }

    public function keprofesian_detail_delete(Request $req)
    {
        // unlink(storage_path('app/public/images/keprofesian/keprofesian_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_keprofesian_detail()->where('dkd_id',$req->id)->delete();
        $keprofesian_image_delete = $this->model->d_keprofesian_image()->where('dki_title',$req->id)->delete();
        return redirect('/main/keprofesian_detail');
    }
}
