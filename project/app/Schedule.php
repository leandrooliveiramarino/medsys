<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Schedule extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'consultation_time',
        'patient_id',
        'doctor_id',
        'consultation_datetime'
    ];

    protected $guarded = [
        'schedule_date',
        'schedule_time'
    ];

    /**
     * Retorna o usuário que pertence o agendamento.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }

    /**
     * Retorna o paciênte vinculado ao agendamento.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function patient()
    {
        return $this->belongsTo('App\Patient', 'patient_id')->withTrashed();
    }

    /**
     * Retorna o médico vinculado ao agendamento.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->belongsTo('App\Doctor', 'doctor_id')->withTrashed();
    }

    public function setConsultationDatetimeAttribute($value)
    {
        $this->attributes['consultation_datetime'] = Carbon::createFromFormat('d/m/Y H:i', $value);
    }

    public function getConsultationDatetimeAttribute()
    {
        $carbon = new Carbon($this->attributes['consultation_datetime']);
        return $carbon->format('d/m/Y H\hi');
    }

    public function getScheduleDateAttribute()
    {
        $carbon = new Carbon($this->attributes['consultation_datetime']);
        return $carbon->format('d/m/Y');
    }

    public function getScheduleTimeAttribute()
    {
        $carbon = new Carbon($this->attributes['consultation_datetime']);
        return $carbon->format('H:i');
    }
}
