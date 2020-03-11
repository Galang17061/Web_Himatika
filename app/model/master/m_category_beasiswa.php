<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_category_beasiswa extends model
{
    protected $table = 'm_category_beasiswa';
    protected $primaryKey = 'mcb_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'mcb_id',
                            'mcb_title',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

    public function d_beasiswa_detail(){
      return $this->hasMany('App\model\main\beasiswa\d_beasiswa_detail','dbd_category','mcb_id');
    }

    public function d_beasiswa_image(){
      return $this->hasMany('App\model\main\beasiswa\d_beasiswa_image','dbi_category','mcb_id');
    }

}