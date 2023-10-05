<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Image;
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
        //Proyectos creados
        Project::factory()->create([
            'title' => 'Control de activos',
            'short_description' => 'Administración de activos y prestamos de equipos y accesorios de cómputo empresarial',
            'description'      =>  'Aplicación desarrollada para el manejo de equipos y accesorios de computo con el fin de llevar un correcto control de activos y empleados.</br></br>
            El objetivo de esta aplicación fue mantener un control interno de activos vinculando un usuario con equipos de préstamo de uso empresarial, sin embargo fue evolucionando contantemente, logrando tener entre sus características principales:</br></br>Control de usuarios de la aplicación con sistema de privilegios (administradores)<br><br>Préstamo de equipos y accesorios de cómputo </br>Emisión de cartas responsivas en formato PDF</br>Manejo de empleados activos/inactivos</br>Generación de reportes de ubicación, mantenimiento, tipo y estatus de activos</br>Emisión de los reportes mencionados en formato PDF</br>Manejo de merma(scrap)</br>Traspaso de equipos entre ubicaciones(tiendas)</br></br>Esta aplicación fue desarrollada en colaboración con LMRodriguez, compañero encargado de realizar diseño FrontEnd.</br></br> Esta herramienta cuenta con un buscador realizado mediante peticiones AJAX, por lo que si se busca un ítem, la página se actualizara en tiempo real.',
            // 'url_img'           =>  'dorothy.png',
            'created_at'        =>  '2022-09-08 12:00:00'
        ]);

        Project::factory()->create([
            'title' => 'Calculadora de emisiones',
            'short_description' => 'Evaluación y compensación de emisiones de carbono por medio de transporte.',
            'description'       =>  'La calculadora de emisiones de carbono se trata de un sitio web dedicado a la concientización de la huella de carbono y las posibles formas de compensarla que van desde la plantación y/o adopción de árboles de diferentes especies hasta la concientización del uso de tecnologías ecológicas e ideas de ahorro de energía así como el uso de medios de transporte alternativos.<br><br>La calculadora desarrollada te permite saber tu huella de carbono anual dependiendo el medio de transporte utilizado y su equivalente en diferentes especies de árboles.<br><br>Una de las funciones adicionales de este proyecto es que permite a los usuarios visualizar un reporte del uso promedio de esta calculadora por lo que es posible conocer un aproximado de la huella de carbono de producida en México',
            // 'url_img'           =>  'artf.jpg',
            'created_at'        =>  '2021-09-08 12:00:00'
        ]);

        // Project::factory()->create([
        //     'title' => 'Evaluación técnica UNAM',
        //     'short_description' => 'Evaluación técnica de conocimientos basicos de programacion para acceso a la UNAM.',
        //     'url_img'           =>  'unam.svg',
        //     'created_at'        =>  '2021-07-29 12:00:00'
        // ]);

        // Project::factory()->create([
        //     'title'             =>  'Cultura filadelfia',
        //     'short_description' =>  'Sistema de administracion de estudiantes para la mejora de una institucion educativa catolica.',
        //     'url_img'           =>  'cultura.jpg',
        //     'created_at'        =>  '2020-06-05 12:00:00'
        // ]);



        //Tecnologias usadas
        Technology::factory()->create([
            'name' => "Laravel 9",
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

        Technology::factory()->create([
            'name' => "Php",
            'url_image' => 'php-img.png'
        ]);

        Technology::factory()->create([
            'name' => "Html5",
            'url_image' => 'html-img.png'
        ]);

        Technology::factory()->create([
            'name' => "CSS3",
            'url_image' => 'css-img.png'
        ]);

        Technology::factory()->create([
            'name' => "JavaScript",
            'url_image' => 'js-img.png'
        ]);
        
        //Imagenes por proyecto
        //Inventario
        for($i = 1; $i <= 7; $i++){
            Image::factory()->create([
                'project_image' =>  false,
                'url'           =>  "inventarioInterno/dorothy_inventario ($i).jpeg"
            ]);
        }

        Image::factory()->create([
            'project_image' =>  true,
            'url'           =>  "inventarioInterno/dorothy.png"
        ]);

        //Calculadora
        for($i = 1; $i <= 18; $i++){
            Image::factory()->create([
                'project_image' =>  false,
                'url'           =>  "calculadora/calculadora ($i).jpeg",
                'project_id'    =>  2
            ]);
        }

        Image::factory()->create([
            'project_image' =>  true,
            'url'           =>  "calculadora/artf.jpg",
            'project_id'    =>  2
        ]);

    }
}
