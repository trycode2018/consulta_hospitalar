<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicoResource extends JsonResource
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
            'id'=>$this->id,
            'nome_completo'=>$this->nome_completo,
            'bi'=>$this->bi,
            'estado'=>$this->estado,
            'especialidade'=>$this->especialidade
        ];
       // return parent::toArray($request);
    }
}
