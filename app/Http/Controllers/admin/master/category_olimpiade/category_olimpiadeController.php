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
        DB::beginTransaction();
        try{
            $id = $this->model->m_category_olimpiade()->max('mco_id')+1;

            // Save
            $simpan = $this->model->m_category_olimpiade()->create([
                'mco_id'=>$id,
                'mco_title'=>$req->mco_title,
                'created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return redirect('/master/category_olimpiade');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect('/master/category_olimpiade');
        }
    }

    public function category_olimpiade_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->m_category_olimpiade()->get()->where('mco_id',$req->id);
        return view('admin.master.category_olimpiade.category_olimpiade_edit',compact('data'));
    }

    public function category_olimpiade_update(Request $req)
    {
        $simpan = $this->model->m_category_olimpiade()->where('mco_id',$req->mco_id)->update([
            'mco_title'=>$req->mco_title
        ]);
        return redirect('/master/category_olimpiade');
    }

    public function category_olimpiade_delete(Request $req)
    {
        $delete = $this->model->m_category_olimpiade()->where('mco_id',$req->id)->delete();
        return redirect('/master/category_olimpiade');
    }
    public function category_olimpiade_datatable()
    {
        return ('e');
    }
}
