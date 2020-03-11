<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_category_post extends model
{
    protected $table = 'm_category_post';
    protected $primaryKey = 'mcp_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'mcp_id',
                            'mcp_title',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }

    public function d_post_detail(){
      return $this->hasMany('App\model\main\post\d_post_detail','dpd_category','mcp_id');
    }

    public function d_post_image(){
      return $this->hasMany('App\model\main\post\d_post_image','dpi_category','mcp_id');
    }

    public function f_post(){
      return $this->belongsTo('App\model\frontend\post','dpi_id','fp_id');
    }
}