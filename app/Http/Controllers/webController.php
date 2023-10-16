<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use Exception;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

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
            if(sizeof($projects)<1){
                throw new Exception();
            }
        }
        catch(Exception $e){
            // abort(404);
            $projects = [];
        }
        
        return view('projects.projects', [
            'projects' => $projects,
            // 'projects' => []
        ]);
    }

    //Detalles por proyecto
    public function projectDetails($id){

        $demo = null;

        try{

            $project = Project::with(['technologies', 'images'])->findOrFail($id);
            if($id == 2){
                $demo = "http://18.224.24.3:1005";
            }else if($id == 3){
                $demo = "http://18.224.24.3:1006";
            }

        }
        catch(Exception $e){
            abort(404);
        }
        
        return view('projects.projectDetails', [
            'project' => $project,
            'demo'    => $demo
        ]);

    }
}
