<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Helper\TryCatchHelper;
use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Resources\Post\PostPaginate;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Repository\Post\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{

    private $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TryCatchHelper::tryCatchResponse(function () {
            $posts = $this->postService->getAllPost();
            return  ResponseJson::success(PostResource::collection($posts),"Listed Successfully");
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostCreateRequest $postCreateRequest)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $postCreateRequest)
    {
        $member = auth()->user()->member->id;
        $data = [
            "title"=>$postCreateRequest->title,
            "short_description"=>$postCreateRequest->short_description,
            "description"=>$postCreateRequest->description,
            "is_public"=>$postCreateRequest->is_login?? 0,
            "fk_member_id"=>$member
        ];

        return TryCatchHelper::tryCatchResponse(function () use ($data) {
            $post = $this->postService->createPost($data);
            return ResponseJson::success(new PostResource($post));
         });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
