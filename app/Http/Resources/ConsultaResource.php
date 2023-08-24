<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConsultaResource extends JsonResource
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
            'prox_data'=> $this->prox_data,
            'doctor'=> new UserResource($this->usuario),
            'paciente'=> new PacienteResource($this->paciente),
            'tipoConsulta'=> new TipoConsultaResource($this->tipoConsulta),
        ];
        // return parent::toArray($request);
    }
}
