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

    public function post_image(Request $data)
    {
         $data = $this->model->d_post_image()->get();
        return view('admin.main.post.post_image.post_image',compact('data'));
    }

    public function post_image_create()
    {
        return view('admin.main.post.post_image.post_image_create');
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
        // Validate that the file is image type
        $this->validate($req,[
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:7000',
        ]);

        DB::beginTransaction();
        try{
            $id = $this->model->d_post_image()->max('dpi_id')+1;

            // Save
            $simpan = $this->model->d_post_image()->create([
                'dpi_id'=>$id,
                'dpi_category'=>$req->dpi_category,
                'dpi_title'=>$req->dpi_title,
                'dpi_image'=>'post_'.$id.'_image'.'.jpg',
            ]);

            Storage::putFileAs(
            'public/images',
            $req->file('image'),
            'post_'.$id.'_image'.'.jpg');

            DB::commit();
            return redirect()->back()->withSuccess('Sukses');
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
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
        // $data = $this->model->m_post_image()->get()->where('dpi_id',$id);
        // $update = $data = $this->model->m_post_image()->get()->where('dpi_id',$id)->update([
        //     'dpi_title'=>$id->dpi_title
        // ]);
    }
    public function post_image_datatable()
    {
        return ('e');
    }
}
