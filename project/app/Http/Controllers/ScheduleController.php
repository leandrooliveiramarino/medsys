<?php

namespace App\Http\Controllers;

use App\Schedulings;
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
        return view('schedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  \App\Schedulings  $schedulings
     * @return \Illuminate\Http\Response
     */
    public function show(Schedulings $schedulings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedulings  $schedulings
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedulings $schedulings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedulings  $schedulings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedulings $schedulings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedulings  $schedulings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedulings $schedulings)
    {
        //
    }
}
