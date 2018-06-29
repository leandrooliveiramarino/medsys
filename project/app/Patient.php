<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * Retorna os agendamentos do paciente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schedule()
    {
        return $this->hasOne('App\Schedule');
    }

    /**
     * Retorna o usuário ao qual o paciente pertence.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
