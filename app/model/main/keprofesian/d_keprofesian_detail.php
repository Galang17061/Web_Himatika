<?php

namespace App\model\main\keprofesian;

use Illuminate\Database\Eloquent\Model;

class d_keprofesian_detail extends model
{
    protected $table = 'd_keprofesian_detail';
    protected $primaryKey = 'dkd_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dkd_id',
                            'dkd_category',
                            'dkd_title',
                            'dkd_description',
                            'dkd_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}