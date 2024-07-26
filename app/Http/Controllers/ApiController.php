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
            $skills = Skill::all(['name', 'description', 'level', 'image']);
            $jobs = Job::all(['company', 'position', 'start_date', 'end_date', 'activities', 'image']);
            $academies = Academy::all(['name', 'academy', 'academy_type', 'start_date', 'end_date', 'image']);

                if(count($skills) === 0){
                    throw new \Exception('Habilidades no encontradas', 404);
                }
                if(count($jobs) === 0){
                    throw new \Exception("Información laboral no encontrada", 404);
                }
            if(count($academies) === 0){
                throw new \Exception("Información academica no encontrada", 404);
            }

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Datos obtenidos correctamente',
                    'data'    => [
                        'skills' => $skills,
                        'jobs' => $jobs,
                        'academies' => $academies
                    ]
                ],200);

        }catch (\Exception $e){
            Log::channel('erroresPortafolio')->info("{$e->getMessage()}, {$e->getFile()}, {$e->getLine()}");
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Error al obtener datos',
                    'data'    => '',
            ], $e->getCode());
        }
    }
}
