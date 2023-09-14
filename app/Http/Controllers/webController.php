<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class webController extends Controller
{
    //Landing page del sitio
    public function home(){

        $projects = Project::all();

        return view('home', [
            "projects" => $projects
        ]);
    }

    public function details($id){
        
        $project = Project::find($id);

        return view('details', [
            'project' => $project
        ]);
    }
}
