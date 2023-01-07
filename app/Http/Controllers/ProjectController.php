<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Helper\TryCatchHelper;
use App\Http\Requests\Project\ProjectStoreRequest;
use App\Http\Resources\Project\ProjectPaginate;
use App\Http\Resources\Project\ProjectResource;
use App\Models\Project;
use App\Repository\Project\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    private $projectService;
    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TryCatchHelper::tryCatchResponse(function () {
            $projects=$this->projectService->getAllProjects();
            return ResponseJson::success(new ProjectPaginate($projects),"Projects Listed Success Fully");
         });
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $projectStoreRequest)
    {

        $data = [
            "title"=>$projectStoreRequest->title,
            "start_date"=>$projectStoreRequest->start_date,
            "end_date"=>$projectStoreRequest->end_date,
            "description"=>$projectStoreRequest->description,
            "short_description"=>$projectStoreRequest->short_description,
            "is_completed"=>$projectStoreRequest->is_completed,
            "location"=>$projectStoreRequest->location,
            "donor"=>$projectStoreRequest->donor,
            "fk_member_id"=>Auth::user()->member->id
        ];
        return TryCatchHelper::tryCatchResponse(function () use ($data) {
            $project=$this->projectService->createProject($data);
            return ResponseJson::success(new ProjectResource($project),"Project Created Success Fully");
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return TryCatchHelper::tryCatchResponse(function () use ($id) {
            $project = $this->projectService->getProject($id);
            return ResponseJson::success(new ProjectResource($project));
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return TryCatchHelper::tryCatchResponse(function () use ($id) {
            $this->projectService->deleteProject($id);
            return ResponseJson::success(null,"Deleted Success");
         });
    }

    public function getProjectsOMember(int $id)
    {
        return TryCatchHelper::tryCatchResponse(function () use ($id) {
            $projects = $this->projectService->getAllProjectOfMember($id);
            return ResponseJson::success(new ProjectPaginate($projects));
        });
    }

    public function toggleProjectStatus(int $id)
    {
        return TryCatchHelper::tryCatchResponse(function () use ($id) {
            $project= $this->projectService->toggleProjectCompletedStatus($id);
            return ResponseJson::success(new ProjectResource($project));
        });
    }
}
