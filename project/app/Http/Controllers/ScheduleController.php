<?php

namespace App\Http\Controllers;

use Auth;
use App\Doctor;
use App\Patient;
use App\Schedule;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSchedule;

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
    public function store(StoreSchedule $request)
    {
        $schedule = new Schedule();
        $schedule->fill($request->all());
        $schedule->user_id = Auth::user()->id;
        $schedule->consultation_datetime = $request->schedule_date . ' ' . $request->schedule_time;

        if($schedule->save()) {
            return redirect()->route('schedule.index');
        }
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
    public function update(StoreSchedule $request, Schedule $schedule)
    {
        $schedule->fill($request->all());
        $schedule->user_id = Auth::user()->id;
        $schedule->consultation_datetime = $request->schedule_date . ' ' . $request->schedule_time;

        if($schedule->save()) {
            return redirect()->route('schedule.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedule.index');
    }
}
