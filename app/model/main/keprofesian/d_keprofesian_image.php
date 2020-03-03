<?php

namespace App\model\main\keprofesian;

use Illuminate\Database\Eloquent\Model;

class d_keprofesian_image extends model
{
    protected $table = 'd_keprofesian_image';
    protected $primaryKey = 'dki_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dki_id',
                            'dki_category',
                            'dki_title',
                            'dki_description',
                            'dki_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}