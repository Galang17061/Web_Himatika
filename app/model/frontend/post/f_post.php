<?php

namespace App\model\frontend\post;

use Illuminate\Database\Eloquent\Model;

class f_post extends model
{
    protected $table = 'f_post';
    protected $primaryKey = 'fp_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'fp_id',
                            'fp_category',
                            'fp_title',
                            'fp_description',
                            'fp_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

    public function m_category_post(){
        return $this->hasMany('App\model\master\m_category_post','mcp_id','fp_id');
    }

    public function d_post_detail(){
        return $this->hasMany('App\model\main\post\d_post_detail','dpd_id','fp_id');
    }

    public function d_post_image(){
        return $this->hasMany('App\model\main\post\d_post_image','dpi_id','fp_id');
    }
}