<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    public function doctor()
    {
        return $this->hasOne('Doctor', 'expertise_id');
    }
}
