<?php

namespace App\Http\Controllers\admin\master\category_post;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class category_postController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function category_post(Request $data)
    {
         $data = $this->model->m_category_post()->get();
        return view('admin.master.category_post.category_post',compact('data'));
    }
    public function category_post_create()
    {
        return view('admin.master.category_post.category_post_create');
    }
    public function category_post_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->m_category_post()->max('mcp_id')+1;

            // Save
            $simpan = $this->model->m_category_post()->create([
                'mcp_id'=>$id,
                'mcp_title'=>$req->mcp_title,
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }

    public function category_post_edit($id){
        // Ojok Dirubah!
        $data = $this->model->m_category_post()->get()->where('mcp_id',$id);
        return view('admin.master.category_post.category_post_edit',compact('data'));
    }

    public function category_post_update(Request $req)
    {
        $simpan = $this->model->m_category_post()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function category_post_delete($id)
    {
        // $data = $this->model->m_category_post()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_category_post()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function category_post_datatable()
    {
        return ('e');
    }
}
