<?php

namespace App\Http\Controllers\admin\main\olimpiade;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Storage;

class olimpiade_imageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }
    
    public function olimpiade_image()
    {
        $data = $this->model->d_olimpiade_image()->with('m_category_olimpiade')->with('d_olimpiade_detail')->get()->all();
        return view('admin.main.olimpiade.olimpiade_image.olimpiade_image',compact('data'));
    }

    public function olimpiade_image_create()
    {
        $m_category_olimpiade = $this->model->m_category_olimpiade()->get()->all();
        $d_olimpiade_detail = $this->model->d_olimpiade_detail()->get()->all();
        return view('admin.main.olimpiade.olimpiade_image.olimpiade_image_create',compact('m_category_olimpiade','d_olimpiade_detail'));
    }

    public function olimpiade_image_save(Request $req)
    {
        $this->validate($req,[
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        DB::beginTransaction();
        try{
            if(!empty($this->model->d_olimpiade_image()->get('doi_id'))){
                $delete =$this->model->d_olimpiade_image()->where('doi_id',$req->doi_title)->delete();
                $simpan = $this->model->d_olimpiade_image()->create([
                'doi_id'=>$this->model->d_olimpiade_detail()->get('dod_id')->where('dod_id',$req->doi_title)->pluck('dod_id')[0],
                'doi_category'=>$req->get('doi_category'),
                'doi_title'=>$req->get('doi_title'),
                'doi_image'=>'olimpiade_'.$this->model->d_olimpiade_detail()->get('dod_id')->where('dod_id',$req->doi_title)->pluck('dod_id')[0].'_image'.'.jpg',
            ]);

            Storage::putFileAs(
            'public/images/info_kemahasiswaan/olimpiade',
            $req->file('image'),
            'olimpiade_'.$this->model->d_olimpiade_detail()->get('dod_id')->where('dod_id',$req->doi_title)->pluck('dod_id')[0].'_image'.'.jpg');
            DB::commit();
            return redirect('/main/olimpiade_image');
        }
        else{
            return redirect('/main/olimpiade_image');
        }
    }
        catch(\Exception $e){
            DB::rollback();
            print($e);
            // return redirect('/main/olimpiade_image/create');
        }
    }

    public function olimpiade_image_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_olimpiade_image()->where('doi_id',$req->id)->get()->first();
        return view('admin.main.olimpiade.olimpiade_image.olimpiade_image_edit',compact('data'));
    }

    public function olimpiade_image_update(Request $req)
    {
        if(!empty($req->file('image'))){
            Storage::putFileAs(
                'public/images/info_kemahasiswaan/olimpiade',
                $req->file('image'),
                'olimpiade_'.$req->doi_id.'_image.jpg');
                return redirect('/main/olimpiade_image');
        }
        else{
            return redirect('/main/olimpiade_image/edit');
        }
    }
    
    public function olimpiade_image_delete(Request $req)
    {
        unlink(storage_path('app/public/images/info_kemahasiswaan/olimpiade/olimpiade_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_olimpiade_image()->where('doi_id',$req->id)->delete();
        return redirect('/main/olimpiade_image');
    }
}
