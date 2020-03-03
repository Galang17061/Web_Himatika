<?php

namespace App\Http\Controllers\admin\master\category_keprofesian;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class category_keprofesianController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function category_keprofesian(Request $data)
    {
         $data = $this->model->m_category_keprofesian()->get();
        return view('admin.master.category_keprofesian.category_keprofesian',compact('data'));
    }
    public function category_keprofesian_create()
    {
        return view('admin.master.category_keprofesian.category_keprofesian_create');
    }
    public function category_keprofesian_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->m_category_keprofesian()->max('mck_id')+1;

            // Save
            $simpan = $this->model->m_category_keprofesian()->create([
                'mck_id'=>$id,
                'mck_title'=>$req->mck_title,
                'created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }

    public function category_keprofesian_edit($id){
        // Ojok Dirubah!
        $data = $this->model->m_category_keprofesian()->get()->where('mck_id',$id);
        return view('admin.master.category_keprofesian.category_keprofesian_edit',compact('data'));
    }

    public function category_keprofesian_update(Request $req)
    {
        $simpan = $this->model->m_category_keprofesian()->where('mck_id',$req->mck_id)->update([
            'mck_title'=>$req->mck_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mck_id;
    }

    public function category_keprofesian_delete($id)
    {
        // $data = $this->model->m_category_keprofesian()->get()->where('mck_id',$id);
        // $update = $data = $this->model->m_category_keprofesian()->get()->where('mck_id',$id)->update([
        //     'mck_title'=>$id->mck_title
        // ]);
    }
    public function category_keprofesian_datatable()
    {
        return ('e');
    }
}
