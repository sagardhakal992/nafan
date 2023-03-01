<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
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
        $posts = Post::where("is_public",1)->get()->take(6);
        $gallery=Gallery::all()->sortByDesc("created_at")->take(10)->toArray();
        return view('welcome',["currentProjects"=>$currentProjects,"posts"=>$posts,"pastProjects"=>$pastProjects,"gallery"=>$gallery]);
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

            return redirect("/");
        }
    }

    public function newsDetail(int $id)
    {
        try{
            $post = Post::find($id);
            if(!$post)
            {
                return redirect("/");
            }
            return view("NewsDetail", ["post" => $post]);
        }
        catch(Exception $exception)
        {
            return redirect("/");
        }
    }

    public function gallery()
    {
        $galleries=GalleryCategory::all();
        return view("Gallery",[
            "galleries"=>$galleries
        ]);
    }
    public function galleryDetail(int $id)
    {
        try{
            $gallery=GalleryCategory::findOrFail($id);
            $images=$gallery->gallery;
            return view("GalleryDetail",[
                "images"=>$images
            ]);
        }
        catch(Exception $e)
        {
            return redirect("/");
        }
    }
}
