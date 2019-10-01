<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroups extends Model
{
    public $incrementing = false;

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function groups()
    {
        return $this->belongsTo('App\Groups');
    }



}
