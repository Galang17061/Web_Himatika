<?php

namespace App\model\main\post;

use Illuminate\Database\Eloquent\Model;

class d_post_detail extends model
{
    protected $table = 'd_post_detail';
    protected $primaryKey = 'dpd_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dpd_id',
                            'dpd_category',
                            'dpd_title',
                            'dpd_description',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

    public function m_category_post(){
      return $this->belongsTo('App\model\master\m_category_post','dpd_category','mcp_id');
    }

    public function d_post_image(){
      return $this->hasMany('App\model\main\post\d_post_image','dpi_id','dpd_id');
    }

}