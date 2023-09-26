<div class="projectBox">
    <div class="tecnoList">
            @if (isset($project))
                @foreach ($project->technologies as $technology )
                    <img class="tecnoImg" src='{{ asset("img/tecnoLogos/".$technology->url_image) }}' alt="photo">    
                @endforeach
            @else
                <img class="tecnoImg" src='{{ asset("img/tecnoLogos/notec.svg") }}' alt="photo">    
            @endif
    </div>
    <div class="projectListText">
        @if (isset($project))
            <h2 class="thirdTitle textPurple">{{ $project->title }}</h2>
            <p class="middleText">{{ $project->short_description }}</p> 
            <div class="linkBox" >
                <a class="projectLink" href="{{route("projectDetails", ['id' => $project->id])}}">Ver más
                    <img class="linkImage" src="{{ asset('img/logos/magnifier-logo.svg') }}" alt="photo">
                 </a>
            </div>
        @else
            <h2 class="thirdTitle textPurple">Ooops!</h2> 
            <p class="middleText">Aun no hay proyectos disponibles que mostrar, sigue pendiente para próximas actualizaciones.</p>
        @endif
    </div>
</div>