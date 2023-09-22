@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/projects/projectsMobileStyles.css') }}">
<div class="container">
    <main class="projects">
        <div class="projectsText">
            <h2 class="smallText textPurple">Gerardo López Hernández</h2>
            <h1 class="thirdTitle ">Portafolio de proyectos</h1>
            {{-- <p class="middleText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus atque labore nesciunt iusto provident quos quibusdam debitis omnis tenetur? Dignissimos delectus dolorum recusandae ea! Saepe dolores nemo corrupti distinctio.</p> --}}
        </div>
        <div class="projectsList">
            @forelse ($projects as $project)
            <div class="projectBox">
                <div class="tecnoList">
                    <img class="tecnoImg" src='{{ asset("img/tecnoLogos/".$technology->url_image) }}' alt="photo">
                </div>
                <div class="projectListText">
                    <h2 class="thirdTitle textPurple">{{ $project->title }}</h2>
                    <p class="middleText">{{ $project->short_description }}</p>
                </div>
            </div>    
            @empty
                <div class="projectBox">
                    <div class="tecnoList">
                        <img class="tecnoImg" src='{{ asset("img/tecnoLogos/".$technology->url_image) }}' alt="photo">
                    </div>
                    <div class="projectListText">
                        <h2 class="thirdTitle textPurple">Ooops!</h2>
                        <p class="middleText">Aun no hay proyectos disponibles que mostrar, sigue pendiente para próximas actualizaciones.</p>
                    </div>
                </div>     
            @endforelse
        </div>
    </main>
</div>
@endsection