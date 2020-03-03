<?php

namespace App\Http\Controllers\admin\master\category_olimpiade;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class category_olimpiadeController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function category_olimpiade(Request $data)
    {
         $data = $this->model->m_category_olimpiade()->get();
        return view('admin.master.category_olimpiade.category_olimpiade',compact('data'));
    }
    public function category_olimpiade_create()
    {
        return view('admin.master.category_olimpiade.category_olimpiade_create');
    }
    public function category_olimpiade_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_category_olimpiade()->max('mcp_id')+1;

            // Save
            $simpan = $this->model->d_category_olimpiade()->create([
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

    public function category_olimpiade_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_category_olimpiade()->get()->where('mcp_id',$id);
        return view('admin.master.category_olimpiade.category_olimpiade_edit',compact('data'));
    }

    public function category_olimpiade_update(Request $req)
    {
        $simpan = $this->model->d_category_olimpiade()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function category_olimpiade_delete($id)
    {
        // $data = $this->model->m_category_olimpiade()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_category_olimpiade()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function category_olimpiade_datatable()
    {
        return ('e');
    }
}
