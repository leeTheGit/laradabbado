<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    public $incrementing = false;

    public function users()
    {
        $this->hasMany('App\UserGroup');
    }
}
