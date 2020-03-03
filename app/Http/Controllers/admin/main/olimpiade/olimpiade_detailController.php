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

    public function olimpiade_detail(Request $data)
    {
         $data = $this->model->d_olimpiade_detail()->get();
        return view('admin.main.olimpiade.olimpiade_detail.olimpiade_detail',compact('data'));
    }
    public function olimpiade_detail_create()
    {
        return view('admin.main.olimpiade.olimpiade_detail.olimpiade_detail_create');
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
                'dod_created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }

    public function olimpiade_detail_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_olimpiade_detail()->get()->where('mcp_id',$id);
        return view('admin.master.olimpiade_detail.olimpiade_detail_edit',compact('data'));
    }

    public function olimpiade_detail_update(Request $req)
    {
        $simpan = $this->model->d_olimpiade_detail()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function olimpiade_detail_delete($id)
    {
        // $data = $this->model->m_olimpiade_detail()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_olimpiade_detail()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function olimpiade_detail_datatable()
    {
        return ('e');
    }
}
