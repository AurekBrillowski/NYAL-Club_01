<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Organization extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'organization_name' => $this->organization_name,
            'organization_abbreviation' => $this->organization_abbreviation
        ];
    }


    public function with($request) {
        return [
            'version' => '1.2.0',
            'author_url' => url('http://parkcitiesxc.org')
        ];
    }

}
