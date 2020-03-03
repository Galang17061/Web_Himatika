<?php

namespace App\Http\Controllers\admin\main\post;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class post_detailController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function post_detail()
    {
        //  $data = $this->model->d_post_detail()->get();
        return view('admin.main.post.post_detail.post_detail');
    }
    public function post_detail_create()
    {
        return view('admin.main.post.post_detail.post_detail_create');
    }
    public function post_detail_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_post_detail()->max('dpd_id')+1;

            // Save
            $simpan = $this->model->d_post_detail()->create([
                'dpd_id'=>$id,
                'dpd_category'=>$req->dpd_category,
                'dpd_title'=>$req->dpd_title,
                'dpd_description'=>$req->dpd_description,
                'dpd_created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }

    public function post_detail_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_post_detail()->get()->where('mcp_id',$id);
        return view('admin.master.post_detail.post_detail_edit',compact('data'));
    }

    public function post_detail_update(Request $req)
    {
        $simpan = $this->model->d_post_detail()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function post_detail_delete($id)
    {
        // $data = $this->model->m_post_detail()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_post_detail()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function post_detail_datatable()
    {
        return ('e');
    }
}
