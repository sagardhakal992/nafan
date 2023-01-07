<?php

namespace App\Repository\Member;



interface MemberService
{
    /**
     * creates new member and a user
     * @param array $data
     * @return \App\Models\Member
     */
    public function createNewMember(array $data);

    /**
     * deletes member and respected user
     * @param int $id
     * @return bool
     */
    public function deleteMember(int $id);

    /**
     * returns list of user with pagination
     * @return array
     */
    public function getAllMember();

    /**
     * get member with id
     * @param int $id
     * @return \App\Models\Member
     */
    public function getMember(int $id);

    /**
     * Returns Member with role id
     * @param int $id
     * @return void
     */
    public function getAllMemberWithRole(int $id);
}
