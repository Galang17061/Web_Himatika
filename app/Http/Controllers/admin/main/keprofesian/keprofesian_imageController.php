<?php

namespace App\Http\Controllers\admin\main\keprofesian;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Storage;

class keprofesian_imageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }
    
    public function keprofesian_image()
    {
        $data = $this->model->d_keprofesian_image()->with('m_category_keprofesian')->with('d_keprofesian_detail')->get()->all();
        return view('admin.main.keprofesian.keprofesian_image.keprofesian_image',compact('data'));
    }

    public function keprofesian_image_create()
    {
        $m_category_keprofesian = $this->model->m_category_keprofesian()->get()->all();
        $d_keprofesian_detail = $this->model->d_keprofesian_detail()->get()->all();
        return view('admin.main.keprofesian.keprofesian_image.keprofesian_image_create',compact('m_category_keprofesian','d_keprofesian_detail'));
    }

    public function keprofesian_image_save(Request $req)
    {
        $this->validate($req,[
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        DB::beginTransaction();
        try{
            if(!empty($this->model->d_keprofesian_image()->get('dki_id'))){
                $delete =$this->model->d_keprofesian_image()->where('dki_id',$req->dki_title)->delete();
                $simpan = $this->model->d_keprofesian_image()->create([
                'dki_id'=>$this->model->d_keprofesian_detail()->get('dkd_id')->where('dkd_id',$req->dki_title)->pluck('dkd_id')[0],
                'dki_category'=>$req->get('dki_category'),
                'dki_title'=>$req->get('dki_title'),
                'dki_image'=>'keprofesian_'.$this->model->d_keprofesian_detail()->get('dkd_id')->where('dkd_id',$req->dki_title)->pluck('dkd_id')[0].'_image'.'.jpg',
            ]);

            Storage::putFileAs(
            'public/images/info_kemahasiswaan/keprofesian',
            $req->file('image'),
            'keprofesian_'.$this->model->d_keprofesian_detail()->get('dkd_id')->where('dkd_id',$req->dki_title)->pluck('dkd_id')[0].'_image'.'.jpg');
            DB::commit();
            return redirect('/main/keprofesian_image');
        }
        else{
            return redirect('/main/keprofesian_image');
        }
    }
        catch(\Exception $e){
            DB::rollback();
            print($e);
            // return redirect('/main/keprofesian_image/create');
        }
    }

    public function keprofesian_image_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_keprofesian_image()->where('dki_id',$req->id)->get()->first();
        return view('admin.main.keprofesian.keprofesian_image.keprofesian_image_edit',compact('data'));
    }

    public function keprofesian_image_update(Request $req)
    {
        if(!empty($req->file('image'))){
            Storage::putFileAs(
                'public/images/info_kemahasiswaan/keprofesian',
                $req->file('image'),
                'keprofesian_'.$req->dki_id.'_image.jpg');
                return redirect('/main/keprofesian_image');
        }
        else{
            return redirect('/main/keprofesian_image/edit');
        }
    }
    
    public function keprofesian_image_delete(Request $req)
    {
        unlink(storage_path('app/public/images/info_kemahasiswaan/keprofesian/keprofesian_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_keprofesian_image()->where('dki_id',$req->id)->delete();
        return redirect('/main/keprofesian_image');
    }
}
