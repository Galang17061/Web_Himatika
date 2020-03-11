<?php

namespace App\Http\Controllers\admin\main\post;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Storage;

class post_imageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }
    
    public function post_image()
    {
        $data = $this->model->d_post_image()->with('m_category_post')->with('d_post_detail')->get()->all();
        return view('admin.main.post.post_image.post_image',compact('data'));
    }

    public function post_image_create()
    {
        $m_category_post = $this->model->m_category_post()->get()->all();
        $d_post_detail = $this->model->d_post_detail()->get()->all();
        return view('admin.main.post.post_image.post_image_create',compact('m_category_post','d_post_detail'));
    }

    public function post_image_save(Request $req)
    {
        $this->validate($req,[
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        DB::beginTransaction();
        try{
            if(!empty($this->model->d_post_image()->get('dpi_id'))){
            // Save
            $simpan = $this->model->d_post_image()->create([
                'dpi_id'=>$this->model->d_post_detail()->get('dpd_id')->where('dpd_id',$req->dpi_title)->pluck('dpd_id')[0],
                'dpi_category'=>$req->get('dpi_category'),
                'dpi_title'=>$req->get('dpi_title'),
                'dpi_image'=>'post_'.$this->model->d_post_detail()->get('dpd_id')->where('dpd_id',$req->dpi_title)->pluck('dpd_id')[0].'_image'.'.jpg',
            ]);

            Storage::putFileAs(
            'public/images/post',
            $req->file('image'),
            'post_'.$this->model->d_post_detail()->get('dpd_id')->where('dpd_id',$req->dpi_title)->pluck('dpd_id')[0].'_image'.'.jpg');

            DB::commit();
            return redirect('/main/post_image');
            }
            else{
            return redirect('/main/post_image');
        }
        }
        catch(\Exception $e){
            DB::rollback();
            print($e);
            // return redirect('/main/post_image');
        }
    }

    public function post_image_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_post_image()->where('dpi_id',$req->id)->get()->first();
        return view('admin.main.post.post_image.post_image_edit',compact('data'));
    }

    public function post_image_update(Request $req)
    {
        if(!empty($req->file('image'))){
            Storage::putFileAs(
                'public/images/post',
                $req->file('image'),
                'post_'.$req->dpi_id.'_image.jpg');
                return redirect('/main/post_image');
        }
        else{
            return redirect('/main/post_image');
        }
    }
    
    public function post_image_delete(Request $req)
    {
        unlink(storage_path('app/public/images/post/post_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_post_image()->where('dpi_id',$req->id)->delete();
        return redirect('/main/post_image');
    }
    public function post_image_datatable()
    {
        return ('e');
    }
}
