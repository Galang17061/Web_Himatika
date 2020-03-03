<?php

namespace App\model\main\beasiswa;

use Illuminate\Database\Eloquent\Model;

class d_beasiswa_detail extends model
{
    protected $table = 'd_beasiswa_detail';
    protected $primaryKey = 'dbd_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dbd_id',
                            'dbd_category',
                            'dbd_title',
                            'dbd_description',
                            'dbd_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}