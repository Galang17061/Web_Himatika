<?php

namespace App\model\main\olimpiade;

use Illuminate\Database\Eloquent\Model;

class d_olimpiade_detail extends model
{
    protected $table = 'd_olimpiade_detail';
    protected $primaryKey = 'dod_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dod_id',
                            'dod_category',
                            'dod_title',
                            'dod_description',
                            'dod_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}