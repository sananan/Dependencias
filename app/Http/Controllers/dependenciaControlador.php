<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dependencia;

class dependenciaControlador extends Controller
{

    public function index()
    {
        $dependencias=Dependencia::orderBY('id', 'DESC')->paginate(3);
        return view('Dependencia.index', compact('dependencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dependencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'tipoTramite'=>'required', 'Nombre'=>'required',
        'Descripcion'=>'required']);
                Dependencia::create($request->all());
        return redirect()->route('Dependencia.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dependencias=Dependencia::find($id);
        return view('Dependencia.show',compact('dependencias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dependencia=Dependencia::find($id);
        return view('Dependencia.edit',compact('dependencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'tipoTramite'=>'required', 'Nombre'=>'required',
        'Descripcion'=>'required']);
                Dependencia::create($request->all());
        
        dependencia::find($id)->update($request->all());
        return redirect()->route('Dependencia.index')->with('success','Registro actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dependencia::find($id)->delete();
        return redirect()->route('Dependencia.index')->with('success','Registro Eliminado');
    }

    public function getdependencias(){
        
        $dependencias=Dependencia::all();
        return response()->json($dependencias);
    }
}
