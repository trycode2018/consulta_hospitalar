<?php

namespace App\Http\Controllers;

use App\Models\TipoConsulta;
use Illuminate\Http\Request;

class TipoConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TipoConsulta::all();
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
     * @param  \App\Models\TipoConsulta  $tipoConsulta
     * @return \Illuminate\Http\Response
     */
    public function show(TipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoConsulta  $tipoConsulta
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoConsulta  $tipoConsulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoConsulta  $tipoConsulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoConsulta $tipoConsulta)
    {
        //
    }
}
