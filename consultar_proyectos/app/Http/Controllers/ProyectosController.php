<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\View\View;
Use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos=DB::table('proyectos')->get();
        return view('proyecto.index',['proyectos'=> $proyectos]);
    }

    public function edit($id)
    {
        $proyecto= Proyectos::find($id);
        return view('proyecto.update',compact ('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $request -> validate ([
            'nombre' => 'required|max:255',
            'lider' => 'required',
        ]);
        $proyectos = Proyectos::find($id);
        $proyectos -> update($request -> all());
        return redirect()-> route('proyecto.index')
        -> with('success', 'Post updated successfully.');
    }

    public function destroy ($id)
    {
        $proyectos = Proyecto::find($id);
        $proyectos -> delete();
        return redirect() -> route ('proyecto.update')
        -> with('success', 'product deleted successfully');
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
     * @param  \App\Models\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyectos  $proyectos
     * @return \Illuminate\Http\Response
     */
    
}
