<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendar;
use Carbon\Carbon;
use App\Http\Controllers\storeAgendar;

class AgendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('tramita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request -> validate([
            'nombre' => 'required|max:60',
            'apellido_p' => 'required|max:60',
            'apellido_m' => 'required|max:60',
            'telefono' => 'required|min:10|integer',
            'solicitud_fecha' => 'required|date'
        ]);


        $cita = new Agendar();
        $cita -> nombre = $request -> nombre;
        $cita -> apellido_p = $request -> apellido_p;
        $cita -> apellido_m = $request -> apellido_m;
        $cita -> telefono = $request ->telefono;
        $cita -> solicitud_fecha = $request -> solicitud_fecha;
        $cita -> save();
        return redirect()->route('ver_citas.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
