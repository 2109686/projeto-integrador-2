<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentsResource extends JsonResource
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
            'activity_date' => $this->activity_date,
            'input_time' => $this->input_time,
            'output_time' => $this->output_time,
            'equipment' => $this->equipment,
            'brand' => $this->brand,
            'serial_number' => $this->serial_number,
            'responsible' => $this->responsible,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'company' => $this->company,
        ];
    }
}
