<?php

namespace App\Http\Controllers\admin\main\olimpiade;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class olimpiade_imageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    // public function test($param){
    //     return $this->model->m_olimpiade_image()->get()->where('mcp_id',$param);

    // }

    

    public function olimpiade_image()
    {
        //  $data = $this->model->d_olimpiade_image()->get();
        return view('admin.main.olimpiade.olimpiade_image.olimpiade_image');
    }
    public function olimpiade_image_create()
    {
        return view('admin.main.olimpiade.olimpiade_image.olimpiade_image_create');
    }
    public function olimpiade_image_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_olimpiade_image()->max('mcp_id')+1;

            // Save
            $simpan = $this->model->d_olimpiade_image()->create([
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

    public function olimpiade_image_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_olimpiade_image()->get()->where('mcp_id',$id);
        return view('admin.master.olimpiade_image.olimpiade_image_edit',compact('data'));
    }

    public function olimpiade_image_update(Request $req)
    {
        $simpan = $this->model->d_olimpiade_image()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function olimpiade_image_delete($id)
    {
        // $data = $this->model->m_olimpiade_image()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_olimpiade_image()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function olimpiade_image_datatable()
    {
        return ('e');
    }
}
