<?php

namespace App\Http\Controllers;

use App\Helper\ResponseJson;
use App\Http\Requests\ReportReportStore;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function store(ReportReportStore $reportStore)
    {

        if($reportStore->hasFile("file"))
        {
            $fileName = $reportStore->file->getClientOriginalName();
            $date = Carbon::now()->timestamp;
            $filePath = 'uploads/' . $date . $fileName;

            $path = Storage::disk('public')->put($filePath, file_get_contents($reportStore->file));
            $path = Storage::disk('public')->url($path);

            $report=Report::create(["file"=>$path,'name'=>$reportStore->name]);
            return ResponseJson::success($report);
        }
        return ResponseJson::fail([], "No File Found");
    }
}
