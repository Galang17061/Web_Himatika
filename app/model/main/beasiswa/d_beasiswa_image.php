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
                            'dbi_description',
                            'dbi_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}