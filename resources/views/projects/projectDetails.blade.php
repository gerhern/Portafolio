@extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/detailsStyles.css')}}">
<div class="container">
    <section class="detailsSection"> 
        <h2 class="secondTitle detailsTitle">{{$project->title}}</h2>
        <div class="description">
            <p class="middleText">
                {{$project->description}}
            </p>
            <img src="" alt="">
        </div>
    </section>
</div>
@endsection