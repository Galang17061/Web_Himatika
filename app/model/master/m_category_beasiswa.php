<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_category_beasiswa extends model
{
    protected $table = 'm_category_beasiswa';
    protected $primaryKey = 'mcb_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'mcb_id',
                            'mcb_title',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}