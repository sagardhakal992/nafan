<?php

namespace App\Http\Resources\Member;

use App\Http\Resources\Role\RoleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "email"=>$this->email,
            "phone_number"=>$this->phone_number,
            "name"=>$this->name,
            "age"=>$this->age,
            $this->mergeWhen($this->profile_image,[
                "profile_image"=>$this->profile_image
            ]),
            "role"=>new RoleResource($this->role)

        ];
    }
}
