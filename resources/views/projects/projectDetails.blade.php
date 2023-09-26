@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/projects/projectDetailsMobileStyles.css')}}">
<link rel="stylesheet" href="{{asset('css/projects/projectDetails.css')}}" media="screen and (min-width: 1024px)">
<div class="container">
    <section class="detailsSection"> 
        <h2 class="secondTitle detailsTitle">{{$project->title}}</h2>
        <div class="description">
            <p class="middleText">
                {{$project->description}}
            </p>
            <img class="detailsImg" src="https://picsum.photos/600/400" alt="photo">
            {{-- <img src="{{ asset("img/projects/$project->url_img") }}" alt="photo"> --}}
            <h6 class="smallText">{{ $project->created_at->diffForHumans() }}</h6>
        </div>
    </section>
</div>
@endsection