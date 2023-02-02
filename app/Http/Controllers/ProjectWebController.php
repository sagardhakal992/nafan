<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class ProjectWebController extends Controller
{
    public function getCurrentProject()
    {
        try{
            $projects = Project::where("is_completed",false)->paginate(20);
            return view("ProjectList", ["projects" => $projects]);
        }
        catch(Exception $e)
        {
            return view("welcome");
        }
    }

    public function getPastProject()
    {
        try{
            $projects = Project::where("is_completed",true)->paginate(20);
            return view("ProjectList", ["projects" => $projects]);
        }
        catch(Exception $e)
        {
            return view("welcome");
        }
    }


    public function getProjectDetails($id)
    {
        try{
            $project = Project::find($id);
            if(!$project){
                return redirect("/");
            }
            return view("ProjectDetail", ["project" => $project]);
        }
        catch(Exception $e)
        {
            return view("welcome");
        }
    }
}
