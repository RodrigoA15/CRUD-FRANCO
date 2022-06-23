<?php

namespace App\Http\Controllers;

use App\Models\Hour_ambient;
use Illuminate\Http\Request;

class HourAmbientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hora = Hour_ambient::all();
        return view('Hours.index', compact('hora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hours = new Hour_ambient();
        $hours->hora_lunes = $request->hora_lunes;
        $hours->hora_martes = $request->hora_martes;
        $hours->hora_miercoles = $request->hora_miercoles;
        $hours->hora_jueves = $request->hora_jueves;
        $hours->hora_viernes = $request->hora_viernes;

        $hours->save();

        return redirect()->route('horas.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hour_ambient  $hour_ambient
     * @return \Illuminate\Http\Response
     */
    public function show(Hour_ambient $hour_ambient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hour_ambient  $hour_ambient
     * @return \Illuminate\Http\Response
     */
    public function edit(Hour_ambient $hour_ambient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hour_ambient  $hour_ambient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hour_ambient $hour_ambient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hour_ambient  $hour_ambient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hour_ambient::destroy($id);
    }
}
