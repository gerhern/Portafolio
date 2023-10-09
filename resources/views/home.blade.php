@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/home/homeMobileStyles.css')}}">
<link rel="stylesheet" href="{{asset('css/home/homeStyles.css')}}" media="screen and (min-width: 1024px)">
<div class="container">
    <section class="landing">
        <div class="middleOpacity">
            <div class="descriptionBox">
                <h1>Desarrollador de software</h1>
                <h3><span class="importantSpan">{{env('APP_PORTNAME')}} </span>Ingeniero en Computación</h3>
                <p>Egresado de la carrera de Ingeniería en computación por parte de la UNAM, busco desarrollar nuevas habilidades en la creación de software, mi mayor conocimiento corresponde con el desarrollo web usando tecnologías como PHP, Angular, Laravel y JavaScript, disfruto de escribir código con el cual crear nuevas herramientas y aplicaciones.</p>
                <div class="media">
                    <a href="https://github.com/gerhern" target="blank">
                        <img class="mediaImg" src="{{asset('img/logos/github-logo.svg')}}" alt="lorem">
                    </a>
                    <!-- <a href="#">
                        <img class="mediaImg" src="https://picsum.photos/50" alt="ipsum">
                    </a> -->
    
                </div>
            </div>
        </div>
    </section>
    <section class="knowledgeSection">
        <h2 class="thirdTitle fullwidth">Habilidades</h2>
            <div class="knowlegeBox">
                <div class="knowledge">
                    <img class="mediaImg" src="{{asset('img/logos/world-logo.svg')}}" alt="lorem">
                    <p class="middleText">Dominio del idioma inglés nivel A2</p>
                </div>
                <div class="knowledge">
                    <img class="mediaImg" src="{{asset('img/logos/handshake-logo.svg')}}" alt="lorem">
                    <p class="middleText">Habilidad en trabajo en equipo</p>
                </div>
                <div class="knowledge">
                    <img class="mediaImg" src="{{asset('img/logos/poo-logo.svg')}}" alt="lorem">
                    <p class="middleText">Programación Estructurada y Orientada a Objetos</p>
                </div>
                <div class="knowledge">
                    <img class="mediaImg" src="{{asset('img/logos/software-logo.svg')}}" alt="lorem">
                    <p class="middleText">Arquitectura de software Modelo Vista Controlador</p>
                </div>
            </div>
                {{-- 2da ronda --}}
                <div class="knowlegeBox">
                    <div class="knowledge">
                        <img class="mediaImg" src="{{asset('img/logos/algorithm-logo.svg')}}" alt="lorem">
                        <p class="middleText">Algoritmos de búsqueda y estructuras de datos</p>
                    </div>
                    <div class="knowledge">
                        <img class="mediaImg" src="{{asset('img/logos/linux-logo.svg')}}" alt="lorem">
                        <p class="middleText">Linux</p>
                    </div>
                    <div class="knowledge">
                        <img class="mediaImg" src="{{asset('img/logos/webdev-logo.svg')}}" alt="lorem">
                        <p class="middleText">Html, Css y JavaScript</p>
                    </div>
                    <div class="knowledge">
                        <img class="mediaImg" src="{{asset('img/logos/sql-logo.svg')}}" alt="lorem">
                        <p class="middleText">MySQL y SQL Server</p>
                    </div>
                </div>
                {{-- 3er roinda --}}
                <div class="knowlegeBox">
                    <div class="knowledge">
                        <img class="mediaImg" src="{{asset('img/logos/php-logo.svg')}}" alt="lorem">
                        <p class="middleText">Php</p>
                    </div>
                    <div class="knowledge">
                        <img class="mediaImg" src="{{asset('img/logos/laravel-logo.svg')}}" alt="lorem">
                        <p class="middleText">Composer y Laravel</p>
                    </div>
                    <div class="knowledge">
                        <img class="mediaImg" src="{{asset('img/logos/angular-logo.svg')}}" alt="lorem">
                        <p class="middleText">Angular</p>
                    </div>
                    <div class="knowledge">
                        <img class="mediaImg" src="{{asset('img/logos/windows-logo.svg')}}" alt="lorem">
                        <p class="middleText">Windows y .net</p>
                    </div>
                </div>
    </section>
    {{-- <hr> --}}
    <section class="professionalSection">
        <div class="professionalTitle">
            <h2 class="thirdTitle ">Experiencia profesional</h2>
        </div>

        <div class="job" id="dorothy">
            <div class="imgJob">
                <div class="textJob">
                    <h6 class="smallText textEBlue">2022 - 2023</h6>
                    <h2 class="fourthTitle textPurple">DESARROLLADOR JR. Y BASES DE DATOS</h2>
                    <h4 class="middleText textEBlue">Dorothy Gaynor</h4>
                    <ul class="professionalList">
                        <li>Mantenimiento de aplicaciones</li>
                        <li>Desarrollo de herramientas para la solución de necesidades de diversas áreas.</li>
                        <li>Liberación de aplicaciones en servidor</li>
                        <li>Ejecución y optimización de consultas SQL</li>
                    </ul>
                </div>
            </div>
            
        </div>

        <div class="job" id="artf">
            <div class="imgJob">
                <div class="textJob">
                    <h6 class="smallText textEBlue">2021 - 2022</h6>
                    <h2 class="fourthTitle textPurple">SERVICIO SOCIAL "CALCULADORA DE EMISIONES"</h2>
                    <h4 class="smallText textEBlue">Agencia reguladora de transporte ferroviario</h4>
                    <ul class="professionalList">
                        <li>Aplicación web</li>
                        <li>
                            Calculadora de emisiones de gases de efecto invernadero.
                        </li>
                        <li>Desarrollo mediante Php y Laravel 8</li>
                        <li>Planeación para su continuo desarrollo</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="job" id="cultura">
            <div class="imgJob">
                <div class="textJob">
                    <h6 class="smallText textEBlue">2020</h6>
                    <h2 class="fourthTitle textPurple">PROYECTO ESCOLAR "CULTURA FILADELFIA"</h2>
                    <h4 class="smallText textEBlue">Administración de Tecnologías de la Información</h4>
                    <ul class="professionalList">
                        <li>Desarrollo de aplicación web realizada con arquitectura Modelo-Vista-Controlador</li>
                        <li>Implementación lógica de negocio mediante:</li>
                            <ul>
                                <li>Php</li>
                                <li>Composer</li>
                                <li>JavaScript</li>
                                <li>Ajax</li>
                            </ul>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- <hr> --}}
    <div class="academy">
        <h2 class="thirdTitle">Información academica</h2>
            
                <div class="studyBox">
                    <img class="mediaImg" src="{{asset('img/logos/unam-logo.svg')}}" alt="lorem">
                    <div class="studyText">
                        <h6>2016 - 2021</h6>
                        <p>FACULTAD DE ESTUDIOS SUPERIORES ARAGON UNAM</p>
                        <p>Ingeniería en computación</p>
                    </div>
                </div>
    </div>
</div>
@endsection