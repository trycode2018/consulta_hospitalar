<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnaliseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'data_hora'=> $this->data_hora,
            'medico'=> new MedicoResource($this->medico),
            'paciente'=> new PacienteResource($this->paciente),
            'tipoConsulta'=> new TipoAnaliseResource($this->tipoAnalise),
        ];
        // return parent::toArray($request);
    }
}
