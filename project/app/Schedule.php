<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'consultation_time', 'consultation_datetime'
    ];

    /**
     * Retorna o usuário que pertence o agendamento.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    /**
     * Retorna o paciênte vinculado ao agendamento.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->hasOne('Patient');
    }

    /**
     * Retorna o médico vinculado ao agendamento.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('Doctor');
    }
}
