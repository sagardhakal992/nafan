<?php

namespace App\Http\Resources\Post;

use App\Http\Resources\Member\MemberResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            "short_description"=>$this->short_description,
            "description"=>$this->description,
            "created_at"=>$this->created_at,
            "member"=>new MemberResource($this->member)
        ];
    }
}
