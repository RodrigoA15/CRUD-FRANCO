<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::simplePaginate(10);
        return view('Teachers.index', compact('teachers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *          
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teachers = new Teacher;
        $teachers->nombre = $request->nombre;
        $teachers->apellido = $request->apellido;
        $teachers->direccion = $request->direccion;
        $teachers->correo = $request->correo;
        $teachers->telefono = $request->telefono;
        $teachers->nivel_academico = $request->nivel_academico;
        $teachers->save();
        // return "Usuario guardado con exito";
         return redirect()->route('profesores.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);                                              
        return view('Teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teachers)
    {
    
        $teachers->nombre = $request->nombre;
        $teachers->apellido = $request->apellido;
        $teachers->direccion = $request->direccion;
        $teachers->correo = $request->correo;
        $teachers->telefono = $request->telefono;
        $teachers->nivel_academico = $request->nivel_academico;
        $teachers->save();
        // return "Usuario guardado con exito";
         return redirect()->route('profesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect()->route('profesores.index');
    }
}
