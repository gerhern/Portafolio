    @empty($project)
<div class="projectBox">
    @else
    <div class="projectBox slides">    
    @endempty

    <div class="tecnoList">
        @php
            $techCount =count($project->technologies);
            $techLimit = 3;
        @endphp
        @if (isset($project))
            @if ($techCount > $techLimit)
                @for ($i = 0; $i < $techLimit; $i++)
                <div  class="tecnoImg">
                    <img src='{{ asset("img/tecnoLogos/".$project->technologies[$i]->url_image) }}' alt="photo">
                </div>
                @endfor
                <div  class="tecnoImg">
                    <img src='{{ asset("img/tecnoLogos/plus-img.png") }}' alt="photo">
                </div>
            @else
            @foreach ($project->technologies as $technology )
                    <img class="tecnoImg" src='{{ asset("img/tecnoLogos/".$technology->url_image) }}' alt="photo">    
                @endforeach
            
            @endif
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
            {{-- <img class="projectListImg" src="https://picsum.photos/200/200" alt="photo"> --}}
        @else
            <h2 class="thirdTitle textPurple">Ooops!</h2> 
            <p class="middleText">Aun no hay proyectos disponibles que mostrar, sigue pendiente para próximas actualizaciones.</p>
        @endif
    </div>
</div>