<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Academy;
use App\Models\Image;
use App\Models\Job;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Technology;
use Database\Factories\SkillFactory;
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
            'short_description' => 'Administración de activos y préstamos de equipos y accesorios de cómputo empresarial',
            'description'      =>  'Aplicación desarrollada para el manejo de equipos y accesorios de cómputo con el fin de llevar un correcto control de activos y empleados.</br></br>
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

        Project::factory()->create([
            'title' => 'Evaluación técnica UNAM',
            'short_description' => 'Evaluación técnica de conocimientos básicos de programación para acceso a la UNAM.',
            'description'       => 'Prueba técnica para ingreso laboral a la UNAM, el objetivo se trata de crear una aplicación simple la cual está compuesta de una API REST y un CRUD de empleados relacionados mediante una fecha de nacimiento/id a través de una base de datos MySQL.<br><br>Entre los puntos necesarios para aprobar esta evaluación técnica, tenemos:<br>Tiempo límite de desarrollo de 6 horas<br>Manejo de base de datos relacional y extracción de información de más de una tabla simultaneamente<br>Uso de framework de estilos para el maquetado<br>Uso de AJAX para búsquedas asíncronas<br>Inclusión de una API REST para la consulta y creación de registros.',
            // 'url_img'           =>  'unam.svg',
            'created_at'        =>  '2021-07-29 12:00:00'
        ]);

        Project::factory()->create([
            'title'             =>  'Cultura filadelfia',
            'short_description' =>  'Sistema de administración de estudiantes para la mejora de una institución educativa católica.',
            'description'       =>  'Como parte de un proyecto para la materia de "Administración de tecnologias de la información", se contacta con una institución católica la cual tiene un manejo de alumnos, profesores y cursos manual, es decir todo lo mencionado anteriormente se manejaba con archivos de excel, por lo que despues de una serie de entrevistas tecnicas se obtienen los parametros necesarios para llevar a cabo el desarrollo.<br><br>Este proyecto fue desarrollado por un total de 4 estudiantes con la supervisión de una profesora de la UNAM.<br><br>Entre las capacidades de este software se encuentran:<br>Manejo de usuarios y privilegios (alumno, maestro y adjunto)<br>Creación, edición e inscripción a cursos<br>Manejo de archivos pdf (materiales de apoyo)<br>Sistema serializado de incripciones y pagos de cursos',
            // 'url_img'           =>  'cultura.jpg',
            'created_at'        =>  '2020-06-05 12:00:00'
        ]);



        //Tecnologias usadas
        Technology::factory()->create([
            'name' => "Laravel 9",
            'url_image' => 'laravel-img.png'
        ]);

        Technology::factory()->create([
            'name' => "Laravel 8",
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

        Technology::factory()->create([
            'name' => "Composer",
            'url_image' => 'composer-img.png'
        ]);

        Technology::factory()->create([
            'name' => "Bootstrap",
            'url_image' => 'bootstrap-img.png'
        ]);

        //Habilidades
        Skill::factory()->create([
            'name'          => 'Ingles',
            'description'   => 'Dominio del idioma inglés nivel B1',
            'level'         => 70,
            'image'         => 'img/logos/world-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'Poo',
            'description'   => 'Programación Estructurada y Orientada a Objetos',
            'level'         => 65,
            'image'         => 'img/logos/poo-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'Trabajo en equipo',
            'description'   => 'Habilidad para trabajar proyectos en equipo',
            'level'         => 90,
            'image'         => 'img/logos/handshake-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'Mvc',
            'description'   => 'Arquitectura de software Modelo Vista Controlador',
            'level'         => 70,
            'image'         => 'img/logos/software-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'Php',
            'description'   => 'Desarrollo web con PHP',
            'level'         => 85,
            'image'         => 'img/logos/php-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'Laravel',
            'description'   => 'Framework de desarrollo web-backend Laravel',
            'level'         => 80,
            'image'         => 'img/logos/laravel-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'Angular',
            'description'   => 'Framework de desarrollo web-frontend Angular',
            'level'         => 60,
            'image'         => 'img/logos/angular-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'Linux',
            'description'   => 'Manejo del sistema operativo Linux',
            'level'         => 60,
            'image'         => 'img/logos/linux-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'Frontend',
            'description'   => 'Html, Css y JavaScript',
            'level'         => 80,
            'image'         => 'img/logos/webdev-logo.svg'
        ]);

        Skill::factory()->create([
            'name'          => 'DB',
            'description'   => 'MySQL, SQL Server y PostgreSQL',
            'level'         => 60,
            'image'         => 'img/logos/sql-logo.svg'
        ]);

        //Trabajos
        Job::create([
           'company'        =>  'Dorothy Gaynor',
            'position'      =>  'Desarrollador Jr. y Base de Datos',
            'start_date'    =>  '2022-03-22',
            'end_date'      =>  '2023-05-31',
            'activities'    => 'Mantenimiento de aplicaciones, Desarrollo de herramientas para la solución de necesidades de diversas áreas, Liberación de aplicaciones en servidor, Ejecución y optimización de consultas SQL',
            'image'         => 'assets/img/inventarioInterno/dorothy.png'
        ]);

        Job::create([
            'company'       =>  'Agencia reguladora de transporte ferroviario',
            'position'      =>  'Servicio Social -Calculadora de Emisiones-',
            'start_date'    =>  '2021-01-01',
            'end_date'      =>  '2022-01-01',
            'activities'    => 'Aplicación web, Calculadora de emisiones de gases de efecto invernadero, Desarrollo mediante Php y Laravel 8, Planeación para su continuo desarrollo',
            'image'         => 'assets/img/calculadora/artf.jpg'
        ]);

        Job::create([
            'company'       =>  'Fes Aragon UNAM',
            'position'      =>  'Proyecto Escolar -Cultura Filadelfia-',
            'start_date'    =>  '2020-01-01',
            'end_date'      =>  '2021-01-01',
            'activities'    => 'Desarrollo de aplicación web realizada con arquitectura Modelo-Vista-Controlador, Implementación lógica de negocio mediante: Php, Composer, JavaScript',
            'image'         => 'assets/img/cultura/cultura.jpg'
        ]);

        Job::create([
            'company'       =>  'Secretaria de Administracion y Finanzas',
            'position'      =>  'Jefe de Unidad Departamental de Soporte Tecnologico de Sistemas',
            'start_date'    =>  '2024-01-01',
            'end_date'      =>  '2099-12-31',
            'activities'    => 'Desarrollo y mantenimiento de aplicaciones, atencion a usuarios finales ',
            'image'         => 'assets/img/saf/logo.png'
        ]);

        //Escolaridad y cursos

        Academy::create([
            'name'          =>  'Ingeniería en Computación',
            'academy'       =>  'Facultad de Estudios Superiores Aragón',
            'academy_type'  =>  'Escuela',
            'start_date'    =>  '2016-01-01',
            'end_date'      =>  '2021-01-01',
            'image'         =>  'assets/img/logos/unam-logo.svg'
        ]);

        Academy::create([
            'name'          =>  'Desarrollo Web Backend Con Php',
            'academy'       =>  'Platzi',
            'academy_type'  =>  'Certificacion',
            'start_date'    =>  '2016-01-01',
            'end_date'      =>  '2021-07-31',
            'image'         => 'assets/img/logos/platzi.svg'
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
        for($i = 1; $i <= 16; $i++){
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

        //Prueba tecnica UNAM
        for($i = 1; $i <= 3; $i++){
            Image::factory()->create([
                'project_image' =>  false,
                'url'           =>  "bua/bua ($i).jpeg",
                'project_id'    =>  3
            ]);
        }

        // Image::factory()->create([
        //     'project_image' =>  true,
        //     'url'           =>  "calculadora/artf.jpg",
        //     'project_id'    =>  2
        // ]);

        //Proyecto cultura
        for($i = 1; $i <= 3; $i++){
            Image::factory()->create([
                'project_image' =>  false,
                'url'           =>  "cultura/cultura ($i).jpeg",
                'project_id'    =>  4
            ]);
        }

        Image::factory()->create([
            'project_image' =>  true,
            'url'           =>  "cultura/cultura.jpg",
            'project_id'    =>  4
        ]);
    }
}
