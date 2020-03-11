<?php

namespace App\Http\Controllers\admin\main\post;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class post_detailController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function post_detail()
    {
        $data = $this->model->d_post_detail()->get();
        return view('admin.main.post.post_detail.post_detail',compact('data'));
    }

    public function post_detail_create()
    {
        $m_category_post = $this->model->m_category_post()->get()->all();
        return view('admin.main.post.post_detail.post_detail_create',compact('m_category_post'));
    }

    public function post_detail_save(Request $req)
    {
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
            return redirect('/main/post_detail');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect('/main/post_detail/create');
        }
    }

    public function post_detail_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_post_detail()->where('dpd_id',$req->id)->get()->first();
        return view('admin.main.post.post_detail.post_detail_edit',compact('data'));
    }

    public function post_detail_update(Request $req)
    {
        $simpan = $this->model->d_post_detail()->where('dpd_id',$req->dpd_id)->update([
            'dpd_title'=>$req->dpd_title,
            'dpd_description'=>$req->dpd_description
        ]);
        return redirect('/main/post_detail');
    }

    public function post_detail_delete(Request $req)
    {
        unlink(storage_path('app/public/images/post/post_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_post_detail()->where('dpd_id',$req->id)->delete();
        $post_image_delete = $this->model->d_post_image()->where('dpi_title',$req->id)->delete();
        return redirect('/main/post_detail');
    }
}
