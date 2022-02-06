<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'country_id' =>  $this['country_id'],
            'country' =>  $this['country'],
            'phone' => $this['phone'],
            'code' =>  $this['code'],
            'state' => $this['is_valid'] ? 'valid' : 'not_valid'

        ];
    }
}
