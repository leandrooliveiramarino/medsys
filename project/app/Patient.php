<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    /**
     * Retorna os agendamentos do paciente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schedules()
    {
        return $this->belongsToMany('Schedule');
    }
}