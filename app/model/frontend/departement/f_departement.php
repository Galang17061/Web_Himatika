<?php

namespace App\model\frontend\departement;

use Illuminate\Database\Eloquent\Model;

class f_departement extends model
{
    protected $table = 'f_departement';
    protected $primaryKey = 'fd_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'fd_id',
                            'fd_name',
                            'fd_description',
                            'fd_work',
                            'fd_agenda',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

    public function m_departement_detail(){
        return $this->belongsTo('App\model\master\m_departement_detail','mdd_id','fd_id');
    }
}