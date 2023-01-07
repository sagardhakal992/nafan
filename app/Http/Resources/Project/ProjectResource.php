<?php

namespace App\Http\Resources\Project;

use App\Http\Resources\Member\MemberResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            "title"=>$this->title,
            "start_at"=>$this->start_date,
            "end_date"=>$this->end_date,
            "donor"=>$this->donor,
            "fk_member_id"=>$this->fk_member_id,
            "is_completed"=>$this->is_completed,
            "location"=>$this->location,
            "short_description"=>$this->short_description,
            "description"=>$this->description,
            "member"=>new MemberResource($this->member)
        ];
    }
}
