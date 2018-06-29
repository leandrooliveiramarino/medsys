<?php

namespace App\Http\Controllers;

use Auth;
use App\Doctor;
use App\Expertise;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDoctor;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = new Doctor();
        $doctor_list = $doctor->all();
        return view('doctor.index', compact('doctor_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expertise = new Expertise();
        $expertise_list = $expertise->all()->pluck('expertise', 'id');

        return view('doctor.create', compact('expertise_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctor $request)
    {
        $doctor = new Doctor();
        $doctor->fill($request->all());
        $doctor->user_id = Auth::user()->id;

        if($doctor->save()) {
            return redirect()->route('doctor.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $expertise = new Expertise();
        $expertise_list = $expertise->all()->pluck('expertise', 'id');
        return view('doctor.edit', compact('expertise_list', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDoctor $request, Doctor $doctor)
    {
        $doctor->fill($request->all());
        $doctor->user_id = Auth::user()->id;

        if($doctor->save()) {
            return redirect()->route('doctor.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index');
    }
}
