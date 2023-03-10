<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoleController;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('jwt')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["prefix" => "auth"], function () {
    Route::post("login", [AuthController::class,"login"]);
	Route::group(["middleware"=>"jwt"],function(){
		Route::post("logout", [AuthController::class,"logout"]);
		Route::get("user", [AuthController::class,"me"]);
	});
});

Route::group(["prefix" => "v1"], function () {

    Route::group(["middleware" => "jwt"],function(){
        Route::group(
            ["prefix" => "member","middleware"=>"roleAuth:".Role::SUPERADMIN],
            function () {
                Route::post("create", [MemberController::class, "store"]);
                Route::get("/", [MemberController::class, "index"]);
                Route::delete("{id}", [MemberController::class, "destroy"]);
                Route::get("{member}", [MemberController::class, "show"]);
        }
        );

        Route::group(["prefix" => "role","middleware"=>"roleAuth:".Role::SUPERADMIN], function () {
            Route::get("/", [RoleController::class, "index"]);
            Route::post("/", [RoleController::class, "store"]);
            Route::delete("{id}", [RoleController::class, "destroy"]);
        });

        Route::group(["prefix" => "project"], function () {
            Route::post("/", [ProjectController::class, "store"]);
            Route::get("{id}", [ProjectController::class, "show"]);
            Route::put("{id}", [ProjectController::class, "toggleProjectStatus"]);
            Route::put("edit/{id}", [ProjectController::class, "updateProject"]);
            Route::delete("{id}", [ProjectController::class, "destroy"]);
            Route::get("member/{id}", [ProjectController::class, "getProjectsOMember"]);
        });

        Route::group(["prefix" => "posts"], function () {
            Route::post("/",[PostController::class,'store']);
        });
        Route::group(["prefix" => "report"], function () {
            Route::post("/",[ReportController::class,'store']);
            Route::delete("{id}",[ReportController::class,'delete']);
        });


        Route::group(
            ["prefix" => "contacts"],
            function () {
                Route::get("/", [ContactController::class,"index"]);
         }
        );

        Route::group(["prefix" => "publication"], function () {
            Route::post("/", [PublicationController::class, "store"]);
            Route::delete("{id}", [PublicationController::class, "delete"]);
        });
    });



    Route::group(["prefix"=>"public"],function(){
        Route::get("projects", [ProjectController::class, "index"]);
        Route::get("posts", [PostController::class, "index"]);
        Route::get("reports", [ReportController::class, 'getAllReports']);
        Route::get("publications", [PublicationController::class, 'getAllPublications']);
    });
});
