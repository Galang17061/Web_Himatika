<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class models extends model
{
    public function User()
    {
        $User = new User();
        return $User;
    }

}
