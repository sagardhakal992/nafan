<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostPaginate extends ResourceCollection
{
    public $pagination;

    public function __construct($resource)
    {
        $this->pagination = [
            'total' => $resource->total(),
            'count' => $resource->count(),
            'per_page' => $resource->perPage(),
            'current_page' => $resource->currentPage(),
            'total_pages' => $resource->lastPage()
        ];

        $resource = $resource->getCollection();

        parent::__construct($resource);

    }
    public function toArray($request)
    {
        return [
            "list"=>PostResource::collection($this->collection),
            "pagination"=>$this->pagination
        ];
    }
}
