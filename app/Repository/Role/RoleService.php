<?php
namespace App\Repository\Role;

interface RoleService
{
    /**
     * Summary of createRole
     * @param array $data
     * @return \App\Models\Role
     */
    public function createRole(array $data);
    /**
     * delete role
     * @param int $id
     * @return bool
     */
    public function deleteRole(int $id);

    /**
     * Summary of getAllRole
     * @return array
     */
    public function getAllRole();


}
