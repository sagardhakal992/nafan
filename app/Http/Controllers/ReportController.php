<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Helper\TryCatchHelper;
use App\Http\Requests\ReportReportStore;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReportController extends Controller
{
    public function store(ReportReportStore $reportStore)
    {

        if($reportStore->hasFile("file"))
        {
            $fileName = $reportStore->file->getClientOriginalName();
            $date = Carbon::now()->timestamp;
            $filePath =  str_replace(" ","",$date . $fileName);
            $reportStore->file->move(public_path("uploads"),$filePath);
            $url = $reportStore->root() . "/uploads/".$filePath;
            $report=Report::create(["file"=>$url,'name'=>$reportStore->name]);
            return ResponseJson::success($report);
        }
        return ResponseJson::fail([], "No File Found");
    }

    public function index(){
        $reports = Report::all();
        return view("ReportList",['reports'=>$reports]);
    }

    public function getALlReports()
    {
        $reports = Report::all();
        return ResponseJson::success($reports);
    }

    public function delete(int $id)
    {
        return TryCatchHelper::tryCatchResponse(function () use ($id) {
            $report = Report::find($id);
            $report->delete();
            return ResponseJson::success();
        });
    }
}
