<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Patient;
use App\Doctor;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = new Schedule();
        $schedule_list = $schedule->all();

        return view('schedule.index', compact('schedule_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = new Doctor();
        $patient = new Patient();

        $doctor_list = $doctor->all()->pluck('name', 'id');
        $patient_list = $patient->all()->pluck('name', 'id');

        return view('schedule.create', compact('doctor_list', 'patient_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $doctor = new Doctor();
        $patient = new Patient();

        $doctor_list = $doctor->all()->pluck('name', 'id');
        $patient_list = $patient->all()->pluck('name', 'id');

        return view('schedule.edit', compact('doctor_list', 'patient_list', 'schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
