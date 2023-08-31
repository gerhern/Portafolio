<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class webController extends Controller
{
    //
    public function home(){

        $projects = Proyecto::all();

        return view('home', [
            "projects" => $projects
        ]);
    }
}
