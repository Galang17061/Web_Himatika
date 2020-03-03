<?php

namespace App\model\main\olimpiade;

use Illuminate\Database\Eloquent\Model;

class d_olimpiade_image extends model
{
    protected $table = 'd_olimpiade_image';
    protected $primaryKey = 'doi_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'doi_id',
                            'doi_category',
                            'doi_title',
                            'doi_description',
                            'doi_created_at'
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}