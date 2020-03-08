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

    public function tes(Request $param){
        return $param->all();
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

    public function post_image_return(Request $req)
    {
        $this->validate($req,[
                'dpi_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:7000',
            ]);

        return dd($req->all());
    }

    public function post_image_save(Request $req)
    {
        // return $req->file('image');
        $this->validate($req,[
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:7000',
        ]);

        DB::beginTransaction();
        try{
            $id = $this->model->d_post_image()->max('dpi_id')+1;

            // Save
            $simpan = $this->model->d_post_image()->create([
                'dpi_id'=>$id,
                'dpi_category'=>$req->get('dpi_category'),
                'dpi_title'=>$req->get('dpi_title'),
                'dpi_image'=>'post_'.$id.'_image'.'.jpg',
            ]);

            Storage::putFileAs(
            'public/images/post',
            $req->file('image'),
            'post_'.$id.'_image'.'.jpg');

            DB::commit();
            return redirect('/main/post_image');
        }
        catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->withError('Sukses');
        }
    }

    public function post_image_edit($id){
        // Ojok Dirubah!
        $data = $this->model->d_post_image()->get()->where('dpi_id',$id);
        return view('admin.master.post_image.post_image_edit',compact('data'));
    }

    public function post_image_update(Request $req)
    {
        $simpan = $this->model->d_post_image()->where('dpi_id',$req->dpi_id)->update([
            'dpi_title'=>$req->dpi_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function post_image_delete($id)
    {
    }
    public function post_image_datatable()
    {
        return ('e');
    }
}
