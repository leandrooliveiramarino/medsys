<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'user_id',
        'expertise_id'
    ];

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
        return $this->belongsTo('App\Expertise', 'expertise_id');
    }

}
