<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlumnoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'numero_de_control' => $this->numero_de_control,
            'nombre' => $this->nombre,
            'domicilio' => $this->domicilio,
            'tiposangre'=> $this->tiposangre,
            'nss' => $this->nss,
            'contactoemergencia' => $this->contactoemergencia,
            'telefonocontactoemergencia' => $this->telefonocontactoemergencia,
        ];
    }
}
