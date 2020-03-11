<?php

namespace App\model\main\post;

use Illuminate\Database\Eloquent\Model;

class d_post_image extends model
{
    protected $table = 'd_post_image';
    protected $primaryKey = 'dpi_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dpi_id',
                            'dpi_category',
                            'dpi_title',
                            'dpi_image'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

    public function m_category_post(){
      return $this->belongsTo('App\model\master\m_category_post','dpi_category','mcp_id');
    }

    public function d_post_detail(){
      return $this->belongsTo('App\model\main\post\d_post_detail','dpi_id','dpd_id');
    }

}