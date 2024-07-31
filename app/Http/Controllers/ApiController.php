<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Job;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    //
    public function index(Request $request){
        try{
            if(!$request->type){
                throw new \Exception("Debe proporcionar un tipo de consulta", 404);
            }
            switch ($request->type) {
                case 'skills':
                    $skills = Skill::all(['name', 'description', 'level', 'image']);
                    if(count($skills) === 0){
                        throw new \Exception('Habilidades no encontradas', 404);
                    }
                break;
                case 'jobs':
                    $jobs = Job::all(['id','company', 'position', 'start_date', 'end_date', 'activities', 'image']);
                    if(count($jobs) === 0){
                        throw new \Exception("Información laboral no encontrada", 404);
                    }
                break;
                case 'academies':
                    $academies = Academy::all(['name', 'academy', 'academy_type', 'start_date', 'end_date', 'image']);
                    if(count($academies) === 0){
                        throw new \Exception("Información academica no encontrada", 404);
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
                    'data'    => [
                        'skills' => $skills ?? '',
                        'jobs' => $jobs ?? '',
                        'academies' => $academies ?? ''
                    ]
                ],200);

        }catch (\Exception $e){
            Log::channel('erroresPortafolio')->info("{$e->getMessage()}, {$e->getFile()}, {$e->getLine()}");
            return response()->json(
                [
                    'success' => false,
                    'message' => $e->getCode() === 404 ? $e->getMessage() : 'Error al obtener datos',
                    'data'    => '',
            ], $e->getCode());
        }
    }
}
