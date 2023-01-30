<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Publication;
use Exception;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        $currentProjects = Project::where('is_completed', false)->orderByDesc("created_at")->take(6)->get();
        $pastProjects = Project::where('is_completed', true)->orderByDesc("created_at")->take(6)->get();
        $posts = Post::take(6)->get();
        return view('welcome',["currentProjects"=>$currentProjects,"posts"=>$posts,"pastProjects"=>$pastProjects]);
    }

    public function publication()
    {
        try{
            $publications = Publication::all();
        return view('Publications',[
            "publications"=>$publications
        ]);
        }
        catch(Exception $exception)
        {
            return $exception->getMessage();
            return redirect("/");
        }
    }
}
