<?php

namespace App\Http\Controllers\admin\master\departement\Sosdev;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Exception;
use Illuminate\Support\Facades\Storage;

Class backend_SosdevController extends Controller{

    protected $model;

    public function __construct(){
        $this->model = new models();
    }

    public function backend_Sosdev(){
        $data = $this->model->m_departement_detail()->where('mdd_id',9)->get()->first();
        return view('admin.master.departement.backend_Sosdev.backend_Sosdev',compact('data'));
    }

    public function backend_Sosdev_update(Request $req){
        $this->validate($req,[
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:7000',
        ]);

        try{
            $mdd_name;
            $image;
            $mdd_description;
            $mdd_work;
            $mdd_agenda;

            if($req->mdd_name != null){
                $mdd_name = $req->mdd_name;
            }

            if(!empty($req->file('image'))){
                $image = $req->image;
                $delete = $this->model->m_departement_detail()->where('mdd_id',9)->update([
                    'mdd_image_profile'=>''
                ]);

                Storage::putFileAs(
                'public/images/departement',
                $req->file('image'),
                'Sosdev.jpg');
            }
            else{
                $image = $this->model->m_departement_detail()->where('mdd_id',9)->get('mdd_image_profile');
            }

            if(!empty($req->mdd_description)){
                $mdd_description = $req->mdd_description;
            }
            else{
                $mdd_description = $this->model->m_departement_detail()->where('mdd_id',9)->get('mdd_description');
            }

            if(!empty($req->mdd_work)){
                $mdd_work = $req->mdd_work;
            }
            else{
                $mdd_work = $this->model->m_departement_detail()->where('mdd_id',9)->get('mdd_work');
            }

            if(!empty($req->mdd_agenda)){
                $mdd_agenda = $req->mdd_agenda;
            }
            else{
                $mdd_agenda = $this->model->m_departement_detail()->where('mdd_id',9)->get('mdd_agenda');
            }
            $delete = $this->model->m_departement_detail()->where('mdd_id',9)->delete();

            $create = $this->model->m_departement_detail()->create([
                'mdd_id'=>9,
                'mdd_name'=>$mdd_name,
                'mdd_description'=>$mdd_description,
                'mdd_work'=>$mdd_work,
                'mdd_agenda'=>$mdd_agenda,
                'mdd_image_profile'=>'Sosdev.jpg'
            ]);
            DB::commit();
            return redirect('/master/departement/backend_Sosdev');
        }
        catch(\Exception $e){
            return print($e);
            DB::rollback();
        return redirect('/master/departement/backend_Sosdev');
        }
    }

}
