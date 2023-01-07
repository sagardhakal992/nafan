<?php

namespace App\Repository\Member;

use App\Helper\TryCatchHelper;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use TheSeer\Tokenizer\Exception;

class MemberServiceImpl implements MemberService
{

	/**
	 * creates new member and a user
	 *
	 * @param array $data
	 * @return \App\Models\Member
	 */
	public function createNewMember(array $data) {
        return TryCatchHelper::tryCatchThrow(function () use ($data) {
            $user = User::create(
                [
                    "email"=>$data["email"],
                    "password"=>Hash::make($data["password"]),
                    "name"=>$data["name"]
                ]
            );

            $user->member()->create([
                "email"=>$data["email"],
                "name"=>$data["name"],
                "phone_number"=>$data["phone_number"],
                "age"=>$data["age"],
                "profile_image"=>$data["profile_image"]??"",
                "fk_role_id"=>$data["fk_role_id"]
            ]);
            return $user->member;

        });
	}

	/**
	 * deletes member and respected user
	 *
	 * @param int $id
	 * @return bool
	 */
	public function deleteMember(int $id) {
        return TryCatchHelper::tryCatchThrow(function () use ($id) {
            $member = Member::find($id);
            if(! $member)
            {
                throw new Exception("No Member Found With Given id");
            }

            $user = $member->user;
            $user->delete();
            $member->delete();
            return true;
        });
	}

	/**
	 * returns list of user with pagination
	 * @return array
	 */
	public function getAllMember() {
        return TryCatchHelper::tryCatchThrow(function () {
            $members = Member::whereNot("id",1)->paginate(25);
            return $members;
        });
	}

	/**
	 * get member with id
	 *
	 * @param int $id
	 * @return \App\Models\Member
	 */
	public function getMember(int $id) {
        return TryCatchHelper::tryCatchThrow(function ()use($id) {
            $member = Member::find($id);
            if(!$member)
            {
                throw new Exception("No Member Found With Given Id");
            }
            return $member;
        });
	}
	/**
	 * Returns Member with role id
	 *
	 * @param int $id
	 * @return void
	 */
	public function getAllMemberWithRole(int $id) {
        return TryCatchHelper::tryCatchThrow(function () use ($id) {
            $members = Member::where("fk_role_id", $id)->paginate(20);
            return $members;
        });
	}
}
