<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Models\Collection;
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
    // return $response = Http::dd()->withHeaders([
    //     "Accept" => "application/json, text/plain, */*",
    //     "Access-Control-Allow-Origin" => "*",
    // ])->get('https://api-mainnet.magiceden.io/popular_collections?more=true&timeRange=7d&edge_cache=true');
    $data = Collection::all();
    $data = DB::table("collections")->limit(50)->get();
    // dd($data[130]->assets);
    return view('collection_all', ["data" => $data]);
});
