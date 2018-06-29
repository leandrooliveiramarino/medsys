<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
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
     * Retorna o usuário ao qual o médico pertence.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function expertise()
    {
        return $this->hasOne('App\Expertise', 'expertise_id');
    }

}
