<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Phpml\Clustering\KMeans;

require __DIR__.'/../../../vendor/autoload.php';

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::all();
        return view('ProjectView', ['data' => $data]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function analyze()
    {
        $datas = Project::all()->keyBy('id');
        $collection = Project::orderBy('id', 'desc')->get();
        $samples = [];
        foreach ($collection as $val) {
            $samples[] = [
                $val->id,
                $val->totalSupply,
                $val->totalVolume,
                $val->totalFloor,
                $val->totalOwners,
            ];
        }

        $color = [
            1 => "danger",
            2 => "warning",
            3 => "pink",
            4 => "primary",
            5 => "success",
        ];

        $kmeans = new KMeans(5);
        $result = $kmeans->cluster($samples);
        return view('AnalyzeView', ['data' => $datas, 'result' => $result, "color" => $color]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
