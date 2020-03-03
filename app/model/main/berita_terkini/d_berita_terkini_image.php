<?php

namespace App\model\main\berita_terkini;

use Illuminate\Database\Eloquent\Model;

class d_berita_terkini_image extends model
{
    protected $table = 'd_berita_terkini_image';
    protected $primaryKey = 'dbti_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dbti_id',
                            'dbti_category',
                            'dbti_title',
                            'dbti_description',
                            'dbti_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}