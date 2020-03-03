<?php

namespace App\Http\Controllers\admin\main\keprofesian;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class keprofesian_imageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    // public function test($param){
    //     return $this->model->m_keprofesian_image()->get()->where('mcp_id',$param);

    // }

    

    public function keprofesian_image()
    {
        //  $data = $this->model->d_keprofesian_image()->get();
        return view('admin.main.keprofesian.keprofesian_image.keprofesian_image');
    }
    public function keprofesian_image_create()
    {
        return view('admin.main.keprofesian.keprofesian_image.keprofesian_image_create');
    }
    public function keprofesian_image_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_keprofesian_image()->max('mcp_id')+1;

            // Save
            $simpan = $this->model->d_keprofesian_image()->create([
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

    public function keprofesian_image_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_keprofesian_image()->get()->where('mcp_id',$id);
        return view('admin.master.keprofesian_image.keprofesian_image_edit',compact('data'));
    }

    public function keprofesian_image_update(Request $req)
    {
        $simpan = $this->model->d_keprofesian_image()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function keprofesian_image_delete($id)
    {
        // $data = $this->model->m_keprofesian_image()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_keprofesian_image()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function keprofesian_image_datatable()
    {
        return ('e');
    }
}
