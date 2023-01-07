<?php
namespace App\Repository\Role;

interface PermissionService{

    /**
     * create new permission
     * @param array $data
     * @return void
     */
    public function createPermission(array $data);
    public function getAllPermission();
    public function deletePermission();

    public function updatePermission(array $data);
}
