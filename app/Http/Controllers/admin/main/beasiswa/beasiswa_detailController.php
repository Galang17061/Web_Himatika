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
        return view('admin.main.beasiswa.beasiswa_detail.beasiswa_detail_create');
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
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }

    public function beasiswa_detail_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_beasiswa_detail()->get()->where('mcp_id',$id);
        return view('admin.master.beasiswa_detail.beasiswa_detail_edit',compact('data'));
    }

    public function beasiswa_detail_update(Request $req)
    {
        $simpan = $this->model->d_beasiswa_detail()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function beasiswa_detail_delete($id)
    {
    }
    public function beasiswa_detail_datatable()
    {
        return ('e');
    }
}
