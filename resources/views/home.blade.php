@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/home/homeStyles.css')}}">
<div class="container">
    <section class="landing">
        <div class="middleOpacity">
            <div class="descriptionBox">
                <h1>Desarrollador de software</h1>
                <h3><span class="importantSpan">{{env('APP_PORTNAME')}} </span>Desarrollador backend</h3>
                <p>Egresado de la carrera de Ingeniería en computación por parte de la UNAM, busco desarrollar nuevas habilidades en la creación de software, mi mayor conocimiento corresponde con el desarrollo web usando tecnologías como PHP, Angular, Laravel y JavaScript, disfruto de escribir código con el cual crear nuevas herramientas y aplicaciones.</p>
                <div class="media">
                    <a href="https://github.com/gerhern">
                        <img class="mediaImg" src="{{asset('img/logos/github32.png')}}" alt="lorem">
                    </a>
                    <!-- <a href="#">
                        <img class="mediaImg" src="https://picsum.photos/50" alt="ipsum">
                    </a> -->
    
                </div>
            </div>
        </div>
    </section>
    <section class="projects">
        <h2 class="secondTitle">Lorem ipsum, dolor.</h2>
        @forelse($projects as $project)
            <x-project :project="$project"></x-project>
        @empty
            <div class="noProjectBox">
                <h5 class="importantSpan thirdTitle">Lorem ipsum</h5>
                <p class="middleText">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque tempora dolore nam sunt mollitia aliquam, quas reiciendis assumenda ratione, vitae ipsa ad fuga? Harum sit vitae pariatur iste commodi deleniti!</p>
            </div>
        @endforelse
    </section>
</div>
@endsection