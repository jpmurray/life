<?php

namespace App\Http\Controllers;

use App\Sleep;
use Illuminate\Http\Request;

class SleepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $nightExists = Sleep::where('date', request('date'))->count();

        if ($nightExists) {
            return redirect()->back()->with('status', 'You already logged data for this night.');
        }

        $data = $this->validate(request(), [
            'date' => 'required|date',
            'energyAtNight' => 'required|numeric',
            'anxietyLevel' => 'required|numeric',
            'timesAwaken' => 'required|numeric',
            'energyInMorning' => 'required|numeric',
            'dreams' => 'nullable',
        ]);

        auth()->user()->sleeps()->create($data);

        return redirect()->back()->with('status', 'Got it!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sleep  $sleep
     * @return \Illuminate\Http\Response
     */
    public function show(Sleep $sleep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sleep  $sleep
     * @return \Illuminate\Http\Response
     */
    public function edit(Sleep $sleep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sleep  $sleep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sleep $sleep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sleep  $sleep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sleep $sleep)
    {
        //
    }
}
