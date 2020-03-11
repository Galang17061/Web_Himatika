<?php

namespace App\Http\Controllers\admin\main\beasiswa;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Storage;

class beasiswa_imageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }
    
    public function beasiswa_image()
    {
        $data = $this->model->d_beasiswa_image()->with('m_category_beasiswa')->with('d_beasiswa_detail')->get()->all();
        return view('admin.main.beasiswa.beasiswa_image.beasiswa_image',compact('data'));
    }

    public function beasiswa_image_create()
    {
        $m_category_beasiswa = $this->model->m_category_beasiswa()->get()->all();
        $d_beasiswa_detail = $this->model->d_beasiswa_detail()->get()->all();
        return view('admin.main.beasiswa.beasiswa_image.beasiswa_image_create',compact('m_category_beasiswa','d_beasiswa_detail'));
    }

    public function beasiswa_image_save(Request $req)
    {
        $this->validate($req,[
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        DB::beginTransaction();
        try{
            if(!empty($this->model->d_beasiswa_image()->get('dbi_id'))){
                $delete =$this->model->d_beasiswa_image()->where('dbi_id',$req->dbi_title)->delete();
                $simpan = $this->model->d_beasiswa_image()->create([
                'dbi_id'=>$this->model->d_beasiswa_detail()->get('dbd_id')->where('dbd_id',$req->dbi_title)->pluck('dbd_id')[0],
                'dbi_category'=>$req->get('dbi_category'),
                'dbi_title'=>$req->get('dbi_title'),
                'dbi_image'=>'beasiswa_'.$this->model->d_beasiswa_detail()->get('dbd_id')->where('dbd_id',$req->dbi_title)->pluck('dbd_id')[0].'_image'.'.jpg',
            ]);

            Storage::putFileAs(
            'public/images/info_kemahasiswaan/beasiswa',
            $req->file('image'),
            'beasiswa_'.$this->model->d_beasiswa_detail()->get('dbd_id')->where('dbd_id',$req->dbi_title)->pluck('dbd_id')[0].'_image'.'.jpg');
            DB::commit();
            return redirect('/main/beasiswa_image');
        }
        else{
            return redirect('/main/beasiswa_image');
        }
    }
        catch(\Exception $e){
            DB::rollback();
            print($e);
            // return redirect('/main/beasiswa_image/create');
        }
    }

    public function beasiswa_image_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_beasiswa_image()->where('dbi_id',$req->id)->get()->first();
        return view('admin.main.beasiswa.beasiswa_image.beasiswa_image_edit',compact('data'));
    }

    public function beasiswa_image_update(Request $req)
    {
        if(!empty($req->file('image'))){
            Storage::putFileAs(
                'public/images/info_kemahasiswaan/beasiswa',
                $req->file('image'),
                'beasiswa_'.$req->dbi_id.'_image.jpg');
                return redirect('/main/beasiswa_image');
        }
        else{
            return redirect('/main/beasiswa_image/edit');
        }
    }
    
    public function beasiswa_image_delete(Request $req)
    {
        unlink(storage_path('app/public/images/info_kemahasiswaan/beasiswa/beasiswa_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_beasiswa_image()->where('dbi_id',$req->id)->delete();
        return redirect('/main/beasiswa_image');
    }
}
