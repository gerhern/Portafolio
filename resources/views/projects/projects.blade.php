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
            @empty($projects)
            @else
            <div class="middleText" id="captionText">Click en una imagen para empezar</div>
            @endempty
            @forelse ($projects as $project)
                <x-project  :project="$project"/>
            @empty
                <x-project/>
            @endforelse

            <div class="slideSelector">
                @forelse ($projects as $project)
                    <img src="https://picsum.photos/200" onclick="currentDiv({{$project->id}})">
                @empty
                @endforelse

            </div>
        </div>
    </main>
</div>

<script>
    function currentDiv(n) {
      showDivs(slideIndex = n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("slides");
      var c = document.getElementById("captionText");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      x[slideIndex-1].style.display = "block";
      c.style.display = "none";
    }
    </script>
@endsection