<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Proyecto::factory(5)->create();
        // Project::factory(1)->create();
        //Proyectos creados
        Project::factory()->create([
            'title' => 'Calculadora de emisiones',
            'short_description' => 'Evaluacion y compensacion de emisiones de carbono por medio de transporte.'
        ]);

        Project::factory()->create([
            'title' => 'Evaluación técnica UNAM',
            'short_description' => 'Evaluación técnica de conocimientos basicos de programacion para acceso a la UNAM.'
        ]);

        Project::factory()->create([
            'title' => 'Cultura filadelfia',
            'short_description' => 'Sistema de administracion de estudiantes para la mejora de una institucion educativa catolica.'
        ]);



        //Tecnologias usadas
        Technology::factory()->create([
            'name' => "Laravel",
            'url_image' => 'laravel-img.png'
        ]);

        Technology::factory()->create([
            'name' => "Tailwind css",
            'url_image' => 'tailwind-img.png'
        ]);

        Technology::factory()->create([
            'name' => "MySql",
            'url_image' => 'mysql-img.png'
        ]);
    }
}
