<?php
namespace App\Repository\Project;

use App\Helper\CollectionHelper;
use App\Helper\TryCatchHelper;
use App\Models\Member;
use App\Models\Project;

class ProjectServiceImpl implements ProjectService
{

	/**
	 * create a new project
	 *
	 * @param array $data
	 * @return \App\Models\Project
	 */
	public function createProject(array $data) {
        return TryCatchHelper::tryCatchThrow(function () use ($data) {
            $project = Project::create([
                "title"=>$data["title"],
                "start_date"=>$data["start_date"],
                "end_date"=>$data["end_date"],
                "fk_member_id"=>$data["fk_member_id"],
                "short_description"=>$data["short_description"],
                "description"=>$data["description"],
                "location"=>$data["location"],
                "donor"=>$data["donor"]
            ]);
            return $project;
        });
	}

	/**
	 * delete project
	 *
	 * @param int $id
	 * @return bool
	 */
	public function deleteProject(int $id) {
        return TryCatchHelper::tryCatchThrow(function () use($id){
            $project = Project::find($id);
            $project->delete();
            return true;
        });
	}

	/**
	 * returns all posts with pagination
	 * @return array
	 */
	public function getAllProjects() {
        return TryCatchHelper::tryCatchThrow(function () {
            $projects = Project::paginate(20);
            return $projects;
        });
	}

	/**
	 * get all completed projects
	 * @return array
	 */
	public function getCompletedProjects() {
        return TryCatchHelper::tryCatchThrow(function () {
            $projects = Project::where("is_completed",true)->paginate(20);
            return $projects;
        });
	}

	/**
	 * get a single project details
	 *
	 * @param int $id
	 * @return \App\Models\Project
	 */
	public function getProject(int $id) {

        return TryCatchHelper::tryCatchThrow(function () use($id){
            $project = Project::find($id);
            return $project;
        });
	}

	/**
	 * toggle project is_completed field
	 *
	 * @param int $id
	 * @return \App\Models\Project
	 */
	public function toggleProjectCompletedStatus(int $id) {
        return TryCatchHelper::tryCatchThrow(function () use($id){
            $project = Project::find($id);
            $project->update(["is_completed", !$project->is_completed]);
            return $project;
        });
	}

	/**
	 * get all projects of member
	 *
	 * @param mixed $id
	 * @return array
	 */
	public function getAllProjectOfMember($id) {
        return TryCatchHelper::tryCatchThrow(function () use($id){
            $member = Member::find($id);
            $projects = $member->projects;
            return CollectionHelper::paginate($projects,15);
        });
	}
}
