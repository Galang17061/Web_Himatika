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
        DB::beginTransaction();
        try{
            $id = $this->model->m_category_berita_terkini()->max('mcbt_id')+1;

            // Save
            $simpan = $this->model->m_category_berita_terkini()->create([
                'mcbt_id'=>$id,
                'mcbt_title'=>$req->mcbt_title,
            ]);
            DB::commit();
            return redirect('master/category_berita_terkini');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect('master/category_berita_terkini');
        }
    }

    public function category_berita_terkini_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->m_category_berita_terkini()->get()->where('mcbt_id',$req->id);
        return view('admin.master.category_berita_terkini.category_berita_terkini_edit',compact('data'));
    }

    public function category_berita_terkini_update(Request $req)
    {
        $simpan = $this->model->m_category_berita_terkini()->where('mcbt_id',$req->mcbt_id)->update([
            'mcbt_title'=>$req->mcbt_title
        ]);
        return redirect('master/category_berita_terkini');
    }

    public function category_berita_terkini_delete(Request $req)
    {
        $delete = $this->model->m_category_berita_terkini()->where('mcbt_id',$req->id)->delete();
        return redirect('/master/category_berita_terkini');
    }
}
