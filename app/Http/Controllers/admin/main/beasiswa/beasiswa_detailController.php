<?php

namespace App\Http\Controllers\admin\main\beasiswa;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class beasiswa_detailController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function beasiswa_detail(Request $req)
    {
        $data = $this->model->d_beasiswa_detail()->get();
        return view('admin.main.beasiswa.beasiswa_detail.beasiswa_detail',compact('data'));
    }
    public function beasiswa_detail_create()
    {
        $m_category_beasiswa = $this->model->m_category_beasiswa()->get()->all();
        return view('admin.main.beasiswa.beasiswa_detail.beasiswa_detail_create',compact('m_category_beasiswa'));
    }
    public function beasiswa_detail_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_beasiswa_detail()->max('dbd_id')+1;

            // Save
            $simpan = $this->model->d_beasiswa_detail()->create([
                'dbd_id'=>$id,
                'dbd_category'=>$req->dbd_category,
                'dbd_title'=>$req->dbd_title,
                'dbd_description'=>$req->dbd_description,
                'dbd_created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return redirect('/main/beasiswa_detail');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect('/main/beasiswa_detail/create');
        }
    }

    public function beasiswa_detail_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_beasiswa_detail()->where('dbd_id',$req->id)->get()->first();
        return view('admin.main.beasiswa.beasiswa_detail.beasiswa_detail_edit',compact('data'));
    }

    public function beasiswa_detail_update(Request $req)
    {
        return $req->all();
        $simpan = $this->model->d_beasiswa_detail()->where('dbd_id',$req->dbd_id)->update([
            'dbd_title'=>$req->dbd_title,
            'dbd_description'=>$req->dbd_description,
        ]);
        return redirect('/main/beasiswa_detail');
    }

    public function beasiswa_detail_delete(Request $req)
    {
        // unlink(storage_path('app/public/images/beasiswa/beasiswa_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_beasiswa_detail()->where('dbd_id',$req->id)->delete();
        $beasiswa_image_delete = $this->model->d_beasiswa_image()->where('dbi_title',$req->id)->delete();
        return redirect('/main/beasiswa_detail');
    }
}
