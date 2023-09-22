<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use Exception;
use Illuminate\Http\Request;

class webController extends Controller
{
    //Landing page del sitio
    public function home(){

        return view('home', [
        ]);
    }

    //pagina con los proyectos en una vision general

    public function projects(){

        try{
            $projects = Project::all();
            $technology = Technology::first();

        }
        catch(Exception $e){

        }

        finally{
            return view('projects.projects', [
                // 'projects' => $projects,
                'projects' => [],
                'technology' => $technology
            ]);
        }
    }

    // public function details($id){
        
    //     $project = Project::find($id);

    //     return view('details', [
    //         'project' => $project
    //     ]);
    // }
}
