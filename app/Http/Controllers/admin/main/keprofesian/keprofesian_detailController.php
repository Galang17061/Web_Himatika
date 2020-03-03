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

    public function keprofesian_detail(Request $data)
    {
         $data = $this->model->d_keprofesian_detail()->get();
        return view('admin.main.keprofesian.keprofesian_detail.keprofesian_detail',compact('data'));
    }
    public function keprofesian_detail_create()
    {
        return view('admin.main.keprofesian.keprofesian_detail.keprofesian_detail_create');
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
                'dkd_created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }

    public function keprofesian_detail_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_keprofesian_detail()->get()->where('mcp_id',$id);
        return view('admin.master.keprofesian_detail.keprofesian_detail_edit',compact('data'));
    }

    public function keprofesian_detail_update(Request $req)
    {
        $simpan = $this->model->d_keprofesian_detail()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function keprofesian_detail_delete($id)
    {
        // $data = $this->model->m_keprofesian_detail()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_keprofesian_detail()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function keprofesian_detail_datatable()
    {
        return ('e');
    }
}
