@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/projects/projectDetailsMobileStyles.css')}}">
<link rel="stylesheet" href="{{asset('css/projects/projectDetails.css')}}" media="screen and (min-width: 1024px)">
<div class="container">
    <section class="detailsSection"> 
        <h2 class="secondTitle detailsTitle">{{$project->title}}</h2>
        <div class="description">
            <p class="middleText">
                {!! $project->description !!}
            </p>
            <div class="techListContainer">
                <ul class="techList">
                    <li class="textPurple">Tecnologías usadas en este proyecto</li>
                    @foreach ($project->technologies as $tech)
                        <li>
                            <div class="techContainer">
                                <img class="techImg" src="{{ asset("img/tecnoLogos/$tech->url_image") }}" alt="photo"> <h6>{{$tech->name}}</h6>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <h6 class="smallText">Proyecto creado:</h6>
            <h6 class="smallText">{{ $project->created_at->diffForHumans() }}</h6>
            {{-- <img class="detailsImg" src="https://picsum.photos/600/400" alt="photo"> --}}
            {{-- <img src="{{ asset("img/projects/$project->url_img") }}" alt="photo"> --}}
        </div>
        <div class="galery">
            @foreach ($project->images as $image)
            {{-- @dd($image) --}}
                @if ($image->project_image)
                    <img class="galeryImg" src="{{ asset("img/$image->url") }}" alt="photo">
                @endif
            @endforeach

            @foreach ($project->images as $image)
                @if (!$image->project_image)
                    <img class="galeryImg" src="{{ asset("img/$image->url") }}" alt="photo">
                @endif
            @endforeach
            {{-- <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo">
            <img class="galeryImg" src="https://picsum.photos/300/200" alt="photo"> --}}
        </div>
        @isset($demo)
        <div class="demoContainer">
            <a class="regularButton" href="{{ $demo }}" target="_blank">Ver demo</a>
        </div>
        @endisset
    </section>
</div>
@endsection