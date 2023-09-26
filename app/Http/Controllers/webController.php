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
            $projects = Project::with('technologies')->get();

        }
        catch(Exception $e){
            abort(404);
        }

        finally{
            return view('projects.projects', [
                'projects' => $projects,
                // 'projects' => []
            ]);
        }
    }

    public function projectDetails($id){

        try{

            $project = Project::findorfail($id);

        }
        catch(Exception $e){
            abort(404);
        }

        finally{
            return view('projects.projectDetails', [
                'project' => $project
            ]);
        }

    }
}
