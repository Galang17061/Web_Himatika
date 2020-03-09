<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_departement_detail extends model
{
    protected $table = 'm_departement_detail';
    protected $primaryKey = 'mdd_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'mdd_id',
                            'mdd_name',
                            'mdd_description',
                            'mdd_work',
                            'mdd_agenda',
                            'mdd_image_profile'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }

    public function f_departement(){
      return $this->hasOne('\App\model\frontend\departement\f_departement','mdd_id','fd_id');
    }
}