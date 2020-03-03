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

    public function berita_terkini_detail(Request $data)
    {
         $data = $this->model->d_berita_terkini_detail()->get();
        return view('admin.main.berita_terkini.berita_terkini_detail.berita_terkini_detail',compact('data'));
    }
    public function berita_terkini_detail_create()
    {
        return view('admin.main.berita_terkini.berita_terkini_detail.berita_terkini_detail_create');
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
                'dbtd_created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }

    public function berita_terkini_detail_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_berita_terkini_detail()->get()->where('mcp_id',$id);
        return view('admin.master.berita_terkini_detail.berita_terkini_detail_edit',compact('data'));
    }

    public function berita_terkini_detail_update(Request $req)
    {
        $simpan = $this->model->d_berita_terkini_detail()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function berita_terkini_detail_delete($id)
    {
        // $data = $this->model->m_berita_terkini_detail()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_berita_terkini_detail()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function berita_terkini_detail_datatable()
    {
        return ('e');
    }
}
