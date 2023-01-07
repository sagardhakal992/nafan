<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Helper\TryCatchHelper;
use App\Http\Requests\Role\RoleStoreRequest;
use App\Http\Resources\Role\RoleResource;
use App\Models\Role;
use App\Repository\Role\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public $roleService;
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TryCatchHelper::tryCatchResponse(function (){
            $roles=$this->roleService->getAllRole();
            return ResponseJson::success(RoleResource::collection($roles),"Listed Successfully");
        });
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleStoreRequest $request)
    {
        $data=[
            "name"=>$request->name
        ];
        return TryCatchHelper::tryCatchResponse(function () use ($data) {
            $role = $this->roleService->createRole($data);
            return ResponseJson::success(new RoleResource($role),"Created Successfully",201);
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return TryCatchHelper::tryCatchResponse(function () use ($id) {
            $this->roleService->deleteRole($id);
            return ResponseJson::success(null,"Deleted Successfully");
        });
    }
}

