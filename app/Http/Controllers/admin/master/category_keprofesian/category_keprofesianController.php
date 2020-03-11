<?php

namespace App\Http\Controllers\admin\master\category_keprofesian;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class category_keprofesianController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function category_keprofesian(Request $data)
    {
         $data = $this->model->m_category_keprofesian()->get();
        return view('admin.master.category_keprofesian.category_keprofesian',compact('data'));
    }
    public function category_keprofesian_create()
    {
        return view('admin.master.category_keprofesian.category_keprofesian_create');
    }
    public function category_keprofesian_save(Request $req)
    {
        DB::beginTransaction();
        try{
            $id = $this->model->m_category_keprofesian()->max('mck_id')+1;

            // Save
            $simpan = $this->model->m_category_keprofesian()->create([
                'mck_id'=>$id,
                'mck_title'=>$req->mck_title,
            ]);
            DB::commit();
            return redirect('master/category_keprofesian');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect('master/category_keprofesian');
        }
    }

    public function category_keprofesian_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->m_category_keprofesian()->get()->where('mck_id',$req->id);
        return view('admin.master.category_keprofesian.category_keprofesian_edit',compact('data'));
    }

    public function category_keprofesian_update(Request $req)
    {
        $simpan = $this->model->m_category_keprofesian()->where('mck_id',$req->mck_id)->update([
            'mck_title'=>$req->mck_title
        ]);
        return redirect('master/category_keprofesian');
    }

    public function category_keprofesian_delete(Request $req)
    {
        $delete = $this->model->m_category_keprofesian()->where('mck_id',$req->id)->delete();
        return redirect('/master/category_keprofesian');
    }
}
