<?php

namespace App\Http\Controllers;

use App\Models\Ambient;
use Illuminate\Http\Request;

class AmbientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ambientes = Ambient::all();
       return view('Ambients.index', compact('ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Ambients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambientes = new Ambient;
        $ambientes->aula_lunes = $request->aula_lunes;
        $ambientes->aula_martes = $request->aula_martes;
        $ambientes->aula_miercoles = $request->aula_miercoles;
        $ambientes->aula_jueves = $request->aula_jueves;
        $ambientes->aula_viernes = $request->aula_viernes;

        $ambientes->save();

        return redirect()->route('ambientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function show(Ambient $ambient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambient $ambient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambient $ambient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ambient  $ambient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ambient::destroy($id);
    }
}
