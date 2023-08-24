<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnaliseResource;
use App\Http\Resources\AnaliseResourceCollection;
use App\Models\Analise;
use Illuminate\Http\Request;

class AnaliseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new AnaliseResourceCollection(Analise::all());
    }
    public function qtdAnalises(){
        return sizeof($this->index());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return new Analise();
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
        $analise = $this->create();
        $analise->paciente_id = $request->input('paciente');
        $analise->tipo_analise_id = $request->input('tipo_analise');
        $analise->medico_id = $request->input('medico');
        $analise->save();
        return $analise->id; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Analise  $analise
     * @return \Illuminate\Http\Response
     */
    public function show(Analise $analise)
    {
        //
        return new AnaliseResource(Analise::findOrfail($analise)->get()->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Analise  $analise
     * @return \Illuminate\Http\Response
     */
    public function edit(Analise $analise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Analise  $analise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Analise $analise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Analise  $analise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Analise $analise)
    {
        //
    }
}
