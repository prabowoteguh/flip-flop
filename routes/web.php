<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::get('/', function () {
    $data = DB::table("collections")->get();
    return view('Dashboard', ["data" => $data]);
});

Route::prefix('project')->group(function () {
    Route::controller(ProjectController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/analyze', 'analyze');
    });
});
