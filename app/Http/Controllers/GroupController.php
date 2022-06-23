<?php

namespace App\Http\Controllers;

use App\Models\Ambient;
use App\Models\Group;
use App\Models\Hour_ambient;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
// use PhpParser\Node\Expr\FuncCall;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::simplePaginate(10);
        
        return view('Groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        $materias = Subject::all();
        $ambients = Ambient::simplePaginate(1);
        $hours = Hour_ambient::simplePaginate(1);
        return view('Groups.create', compact('teachers', 'materias', 'ambients', 'hours'));

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupos = new Group;
        $grupos->anio = $request->anio;
        $grupos->periodo = $request->periodo;
        $grupos->teacher_id = $request->teacher_id;
        $grupos->subject_id = $request->subject_id;
        $grupos->ambient_id = $request->ambient_id;
        $grupos->hour_ambient_id = $request->hour_ambient_id;

        $grupos->save();

        return redirect()->route('grupos.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::destroy($id);
    }

    
}
