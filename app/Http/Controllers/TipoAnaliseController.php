<?php

namespace App\Http\Controllers;

use App\Models\TipoAnalise;
use Illuminate\Http\Request;

class TipoAnaliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TipoAnalise::all();
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
     * @param  \App\Models\TipoAnalise  $tipoAnalise
     * @return \Illuminate\Http\Response
     */
    public function show(TipoAnalise $tipoAnalise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoAnalise  $tipoAnalise
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoAnalise $tipoAnalise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoAnalise  $tipoAnalise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoAnalise $tipoAnalise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoAnalise  $tipoAnalise
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoAnalise $tipoAnalise)
    {
        //
    }
}
