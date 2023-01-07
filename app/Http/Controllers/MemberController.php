<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Helper\TryCatchHelper;
use App\Http\Requests\Member\MemberRegisterRequest;
use App\Http\Resources\Member\MemberPagination;
use App\Http\Resources\Member\MemberResource;
use App\Models\Member;
use App\Repository\Member\MemberService;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class MemberController extends Controller

{

    public $memberService;
    public function __construct(MemberService $memberService)
    {
        $this->memberService = $memberService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $id=$request->id ?? null;
        return TryCatchHelper::tryCatchResponse(function ()use($id) {
            $members =$id == null ? $this->memberService->getAllMember():$this->memberService->getAllMemberWithRole($id);
            return ResponseJson::success(new MemberPagination($members),"Listed Success fully",200);
        });
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRegisterRequest $register)
    {
        $data = [
            "email"=>$register->email,
            "name"=>$register->name,
            "phone_number"=>$register->phone_number,
            "age"=>$register->age,
            "fk_role_id"=>$register->fk_role_id,
            "password"=>$register->password
        ];

        return TryCatchHelper::tryCatchResponse(function () use ($data) {
            $member = $this->memberService->createNewMember($data);
            return ResponseJson::success(new MemberResource($member));
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return TryCatchHelper::tryCatchResponse(function () use ($id) {
            $member = $this->memberService->getMember($id);
           return ResponseJson::success(new MemberResource($member));
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        return TryCatchHelper::tryCatchResponse(function () use ($id) {
            $this->memberService->deleteMember($id);
            return ResponseJson::success([], "Deleted Successfully");
        });
    }
}
