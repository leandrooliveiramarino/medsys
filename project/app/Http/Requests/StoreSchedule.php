<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchedule extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'schedule_date.required' => 'A data de agendamento é obrigatória',
            'schedule_time.required'  => 'O horário do agendamento é obrigatório',
            'consultation_time.required' => 'O tempo da consulta é obrigatório',
            'doctor_id.required'  => 'A escolha do médico é obrigatória',
            'patient_id.required'  => 'A escolha do paciente é obrigatória'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'schedule_date' => 'required',
            'schedule_time' => 'required',
            'consultation_time' => 'required',
            'doctor_id' => 'required',
            'patient_id' => 'required'
        ];
    }
}
