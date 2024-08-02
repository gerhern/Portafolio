<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Job;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    //
    public function index(Request $request){
        try {
            if (!$request->type) {
                throw new \Exception("Debe proporcionar un tipo de consulta", 404);
            }
            switch ($request->type) {
                case 'skills':
                    $skills = Skill::all(['name', 'description', 'level', 'image']);
                    if (count($skills) === 0) {
                        throw new \Exception('Habilidades no encontradas', 404);
                    }
                    break;
                case 'jobs':
                    $jobs = Job::all(['id', 'company', 'position', 'start_date', 'end_date', 'activities', 'image']);
                    if (count($jobs) === 0) {
                        throw new \Exception("Información laboral no encontrada", 404);
                    }
                    break;
                case 'academies':
                    $academies = Academy::all(['name', 'academy', 'academy_type', 'start_date', 'end_date', 'image']);
                    if (count($academies) === 0) {
                        throw new \Exception("Información academica no encontrada", 404);
                    }
                    break;
                case 'projects':
//                    $projects = Project::all(['id', 'title', 'short_description', 'description']);
                    $projects = Project::with('technologies:name,url_image')->get(['id', 'title', 'short_description', 'description']);
                    if (count($projects) === 0) {
                        throw new \Exception("Información de proyectos no encontrada", 404);
                    }
                    break;
                default:
                    throw new \Exception("Tipo de consulta no valida", 404);
                    break;
            }
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Datos obtenidos correctamente',
                    'data' => [
                        'skills' => $skills ?? '',
                        'jobs' => $jobs ?? '',
                        'academies' => $academies ?? '',
                        'projects' => $projects ?? '',
                    ]
                ], 200);

        } catch (\Exception $e) {
            Log::channel('erroresPortafolio')->info("{$e->getMessage()}, {$e->getFile()}, {$e->getLine()}");
            return response()->json(
                [
                    'success'   => false,
                    'message'   => $e->getCode() === 404 ? $e->getMessage() : 'Error al obtener datos',
                    'data'      => '',
                ], $e->getCode());
        }
    }


    public function getProjectData(Request $request){
        try{
            if(!isset($request->id)){
                throw new \Exception("Debe proporcionar un id para continuar", 404);
            }

            $project = Project::with('images')->with('technologies')->find($request->id);

            if(!isset($project)){
                throw new \Exception("El proyecto no existe", 404);
            }

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Datos obtenidos correctamente',
                    'data' => $project
                ], 200);

        }catch (\Exception $e){
            Log::channel('erroresPortafolio')->info("{$e->getMessage()}", [$e->getFile()]);
            return response()->json([
                'success'   => false,
                'message'   => $e->getCode() === 404 ? $e->getMessage() : 'Error al obtener datos',
                'data'      => '',
            ],$e->getCode());
        }
    }
}
