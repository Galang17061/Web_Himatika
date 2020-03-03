<?php

namespace App\Http\Controllers\admin\master\category_berita_terkini;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class category_berita_terkiniController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function category_berita_terkini(Request $data)
    {
         $data = $this->model->m_category_berita_terkini()->get();
        return view('admin.master.category_berita_terkini.category_berita_terkini',compact('data'));
    }
    public function category_berita_terkini_create()
    {
        return view('admin.master.category_berita_terkini.category_berita_terkini_create');
    }
    public function category_berita_terkini_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->m_category_berita_terkini()->max('mcbt_id')+1;

            // Save
            $simpan = $this->model->m_category_berita_terkini()->create([
                'mcbt_id'=>$id,
                'mcbt_title'=>$req->mcbt_title,
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

    public function category_berita_terkini_edit($id){
        // Ojok Dirubah!
        $data = $this->model->m_category_berita_terkini()->get()->where('mcbt_id',$id);
        return view('admin.master.category_berita_terkini.category_berita_terkini_edit',compact('data'));
    }

    public function category_berita_terkini_update(Request $req)
    {
        $simpan = $this->model->m_category_berita_terkini()->where('mcbt_id',$req->mcbt_id)->update([
            'mcbt_title'=>$req->mcbt_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcbt_id;
    }

    public function category_berita_terkini_delete($id)
    {
        // $data = $this->model->m_category_berita_terkini()->get()->where('mcbt_id',$id);
        // $update = $data = $this->model->m_category_berita_terkini()->get()->where('mcbt_id',$id)->update([
        //     'mcbt_title'=>$id->mcbt_title
        // ]);
    }
    public function category_berita_terkini_datatable()
    {
        return ('e');
    }
}
