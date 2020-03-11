<?php

namespace App\Http\Controllers\admin\main\berita_terkini;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Storage;

class berita_terkini_imageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }
    
    public function berita_terkini_image()
    {
        $data = $this->model->d_berita_terkini_image()->with('m_category_berita_terkini')->with('d_berita_terkini_detail')->get()->all();
        return view('admin.main.berita_terkini.berita_terkini_image.berita_terkini_image',compact('data'));
    }

    public function berita_terkini_image_create()
    {
        $m_category_berita_terkini = $this->model->m_category_berita_terkini()->get()->all();
        $d_berita_terkini_detail = $this->model->d_berita_terkini_detail()->get()->all();
        return view('admin.main.berita_terkini.berita_terkini_image.berita_terkini_image_create',compact('m_category_berita_terkini','d_berita_terkini_detail'));
    }

    public function berita_terkini_image_save(Request $req)
    {
        $this->validate($req,[
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);

        DB::beginTransaction();
        try{
            if(!empty($this->model->d_berita_terkini_image()->get('dbti_id'))){
                $delete =$this->model->d_berita_terkini_image()->where('dbti_id',$req->dbti_title)->delete();
                $simpan = $this->model->d_berita_terkini_image()->create([
                'dbti_id'=>$this->model->d_berita_terkini_detail()->get('dbtd_id')->where('dbtd_id',$req->dbti_title)->pluck('dbtd_id')[0],
                'dbti_category'=>$req->get('dbti_category'),
                'dbti_title'=>$req->get('dbti_title'),
                'dbti_image'=>'berita_terkini_'.$this->model->d_berita_terkini_detail()->get('dbtd_id')->where('dbtd_id',$req->dbti_title)->pluck('dbtd_id')[0].'_image'.'.jpg',
            ]);

            Storage::putFileAs(
            'public/images/info_kemahasiswaan/berita_terkini',
            $req->file('image'),
            'berita_terkini_'.$this->model->d_berita_terkini_detail()->get('dbtd_id')->where('dbtd_id',$req->dbti_title)->pluck('dbtd_id')[0].'_image'.'.jpg');
            DB::commit();
            return redirect('/main/berita_terkini_image');
        }
        else{
            return redirect('/main/berita_terkini_image');
        }
    }
        catch(\Exception $e){
            DB::rollback();
            print($e);
            // return redirect('/main/berita_terkini_image/create');
        }
    }

    public function berita_terkini_image_edit(Request $req){
        // Ojok Dirubah!
        $data = $this->model->d_berita_terkini_image()->where('dbti_id',$req->id)->get()->first();
        return view('admin.main.berita_terkini.berita_terkini_image.berita_terkini_image_edit',compact('data'));
    }

    public function berita_terkini_image_update(Request $req)
    {
        if(!empty($req->file('image'))){
            Storage::putFileAs(
                'public/images/info_kemahasiswaan/berita_terkini',
                $req->file('image'),
                'berita_terkini_'.$req->dbti_id.'_image.jpg');
                return redirect('/main/berita_terkini_image');
        }
        else{
            return redirect('/main/berita_terkini_image/edit');
        }
    }
    
    public function berita_terkini_image_delete(Request $req)
    {
        unlink(storage_path('app/public/images/info_kemahasiswaan/berita_terkini/berita_terkini_'.$req->id.'_image.jpg'));
        $delete =$this->model->d_berita_terkini_image()->where('dbti_id',$req->id)->delete();
        return redirect('/main/berita_terkini_image');
    }
}
