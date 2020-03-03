<?php

namespace App\Http\Controllers\admin\master\category_beasiswa;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class category_beasiswaController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function category_beasiswa(Request $data)
    {
         $data = $this->model->m_category_beasiswa()->get();
        return view('admin.master.category_beasiswa.category_beasiswa',compact('data'));
    }
    public function category_beasiswa_create()
    {
        return view('admin.master.category_beasiswa.category_beasiswa_create');
    }
    public function category_beasiswa_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->m_category_beasiswa()->max('mcb_id')+1;

            // Save
            $simpan = $this->model->m_category_beasiswa()->create([
                'mcb_id'=>$id,
                'mcb_title'=>$req->mcb_title,
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
    public function category_beasiswa_edit($id){
        // Ojok Dirubah!
        $data = $this->model->m_category_beasiswa()->get()->where('mcp_id',$id);
        return view('admin.master.category_beasiswa.category_beasiswa_edit',compact('data'));
    }

    public function category_beasiswa_update(Request $req)
    {
        $simpan = $this->model->m_category_beasiswa()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }

    public function category_beasiswa_delete($id)
    {
        // $data = $this->model->m_category_beasiswa()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_category_beasiswa()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function category_beasiswa_datatable()
    {
        return ('e');
    }
}
