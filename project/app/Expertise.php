<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    public function doctors()
    {
        return $this->belongsToMany('Doctor', 'expertise_id');
    }
}
