@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/projects/projectsMobileStyles.css') }}">
<link rel="stylesheet" href="{{ asset('css/projects/projectsStyles.css')}}" media="screen and (min-width: 1024px)">

<div class="container">
    <main class="projects">
        <div class="projectsText">
            <h2 class="smallText textPurple">Gerardo López Hernández</h2>
            <h1 class="thirdTitle ">Portafolio de proyectos</h1>
            {{-- <p class="middleText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus atque labore nesciunt iusto provident quos quibusdam debitis omnis tenetur? Dignissimos delectus dolorum recusandae ea! Saepe dolores nemo corrupti distinctio.</p> --}}
        </div>
        <div class="projectsList">
            @forelse ($projects as $project)
                <x-project  :project="$project"/>
            @empty
                <x-project/>
            @endforelse
        </div>
    </main>
</div>
@endsection