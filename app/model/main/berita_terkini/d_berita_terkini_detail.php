<?php

namespace App\model\main\berita_terkini;

use Illuminate\Database\Eloquent\Model;

class d_berita_terkini_detail extends model
{
    protected $table = 'd_berita_terkini_detail';
    protected $primaryKey = 'dbtd_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dbtd_id',
                            'dbtd_category',
                            'dbtd_title',
                            'dbtd_description',
                            'dbtd_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}