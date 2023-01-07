<?php
namespace App\Repository\Project;

interface ProjectService{

    /**
     * create a new project
     * @param array $data
     * @return \App\Models\Project
     */
    public function createProject(array $data);
    /**
     * delete project
     * @param int $id
     * @return bool
     */
    public function deleteProject(int $id);
    /**
     * returns all posts with pagination
     * @return array
     */
    public function getAllProjects();

    /**
     * get all completed projects
     * @return array
     */
    public function getCompletedProjects();
    /**
     * get a single project details
     * @param int $id
     * @return \App\Models\Project
     */
    public function getProject(int $id);

    /**
     * toggle project is_completed field
     * @param int $id
     * @return \App\Models\Project
     */
    public function toggleProjectCompletedStatus(int $id);

    /**
     * get all projects of member
     * @param mixed $id
     * @return array
     */
    public function getAllProjectOfMember($id);
}
