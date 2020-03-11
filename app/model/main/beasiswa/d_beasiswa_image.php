<?php

namespace App\model\main\beasiswa;

use Illuminate\Database\Eloquent\Model;

class d_beasiswa_image extends model
{
    protected $table = 'd_beasiswa_image';
    protected $primaryKey = 'dbi_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dbi_id',
                            'dbi_category',
                            'dbi_title',
                            'dbi_image',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

    public function m_category_beasiswa(){
      return $this->belongsTo('App\model\master\m_category_beasiswa','dbi_category','mcb_id');
    }

    public function d_beasiswa_detail(){
      return $this->belongsTo('App\model\main\beasiswa\d_beasiswa_detail','dbi_id','dbd_id');
    }

}