<?php
namespace App\Repository\Role;

use App\Helper\TryCatchHelper;
use App\Models\Role;
use TheSeer\Tokenizer\Exception;

class RoleServiceImpl implements RoleService
{

	/**
	 * Summary of createRole
	 *
	 * @param array $data
	 * @return \App\Models\Role
	 */
	public function createRole(array $data) {
        return TryCatchHelper::tryCatchThrow(function () use ($data) {
            $role = Role::create([
                "name"=>$data["name"]
            ]);
            return $role;
         });
	}

	/**
	 * delete role
	 *
	 * @param int $id
	 * @return bool
	 */
	public function deleteRole(int $id) {
        return TryCatchHelper::tryCatchThrow(function () use ($id) {
            $role = Role::find($id);
            if(!$role)
            {
                throw new Exception("No Role Found");
            }
            $role->delete();
            return true;
         });
	}

	/**
	 * Summary of getAllRole
	 * @return array
	 */
	public function getAllRole() {
        return TryCatchHelper::tryCatchThrow(function(){
            $roles=Role::all();
            return $roles;
        });
	}
}
