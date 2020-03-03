<?php

namespace App\Http\Controllers\admin\main\berita_terkini;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class berita_terkini_imageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    // public function test($param){
    //     return $this->model->m_berita_terkini_image()->get()->where('mcp_id',$param);

    // }

    

    public function berita_terkini_image()
    {
        //  $data = $this->model->d_berita_terkini_image()->get();
        return view('admin.main.berita_terkini.berita_terkini_image.berita_terkini_image');
    }
    public function berita_terkini_image_create()
    {
        return view('admin.main.berita_terkini.berita_terkini_image.berita_terkini_image_create');
    }
    public function berita_terkini_image_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_berita_terkini_image()->max('mcp_id')+1;

            // Save
            $simpan = $this->model->d_berita_terkini_image()->create([
                'mcp_id'=>$id,
                'mcp_title'=>$req->mcp_title,
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

    public function berita_terkini_image_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_berita_terkini_image()->get()->where('mcp_id',$id);
        return view('admin.master.berita_terkini_image.berita_terkini_image_edit',compact('data'));
    }

    public function berita_terkini_image_update(Request $req)
    {
        $simpan = $this->model->d_berita_terkini_image()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function berita_terkini_image_delete($id)
    {
        // $data = $this->model->m_berita_terkini_image()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_berita_terkini_image()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function berita_terkini_image_datatable()
    {
        return ('e');
    }
}
