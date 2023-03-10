<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectWebController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[WebController::class,"home"]);

Route::get("/about-us", function () {
    return view("About");
 });
 Route::get("/gallery",[WebController::class,"gallery"]);
 Route::get("/gallery/{id}",[WebController::class,"galleryDetail"]);
Route::get("/working-area", function () {
    return view("WorkingArea");
 });
Route::group(["prefix" => "contact"], function () {
    Route::get("/", function () {
        return view("contact");
    });
    Route::post("/",[ContactController::class,"store"]);
 });

Route::group(["prefix" => "projects"], function () {
    Route::get("/", [ProjectWebController::class, "getCurrentProject"]);
    Route::get("/past-projects", [ProjectWebController::class, "getPastProject"]);
    Route::get("/details/{id}", [ProjectWebController::class, "getProjectDetails"]);
 });

Route::get('/reports', [ReportController::class, "index"]);

Route::get("/publication",[WebController::class,"publication"]);
Route::get("/news/details/{id}",[WebController::class,"newsDetail"]);
