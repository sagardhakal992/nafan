<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Http\Requests\Publication\PublicationRequest;
use App\Models\Publication;
use Exception;
use Illuminate\Http\Request;

class PublicationController extends Controller
{

    public function store(PublicationRequest $publicationRequest)
    {
        $data = $publicationRequest->validated();
        try{
            if($publicationRequest->hasFile("file"))
        {
            $file = $publicationRequest->file("file");
            $orginalName = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();

            $newFilename = time() . "_" . $orginalName;
            $path=$file->storeAs("uploads/pdf", $newFilename, "public");


            $publication=Publication::create(
                [
                    "name"=>$data["name"],
                    "description"=>$data["description"] ?? null,
                    "file_url"=>"https://".$publicationRequest->getHttpHost() ."/storage/".$path
                ]
            );
            return $publication;
        }
        return ResponseJson::fail([], "No Image found");
        }
        catch(Exception $ex)
        {
            return ResponseJson::fail([], $ex->getMessage());
        }
    }

    public function getAllPublications()
    {
        try{
            $publications = Publication::all();
            return ResponseJson::success($publications);
        }
        catch(Exception $ex)
        {
            return ResponseJson::fail([],$ex->getMessage());
        }
    }
}
