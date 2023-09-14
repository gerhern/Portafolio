<div class="proyectCard">
    <div class="cardText">
        <h3 class="thirdTitle">{{$project->title}}</h3>
        <p class="middleText">{{$project->short_description}}</p>
        <h6>{{$project->created_at->diffForHumans()}}</h6>
        <a class="regularButton" href="{{route('details', ['id' => $project->id])}}">Lorem ipsum</a>
    </div>
    <img class="cardImg" src="{{$project->url_img}}" alt="photo">
</div>

<style>
    .proyectCard{
        max-width: 70%;
        display:flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: flex-start;
        margin: 10rem auto;
    }

    .cardText{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 5rem 2rem;
        color:white;
    
    }

    .cardText h3{
        color: var(--middlePurple);
    }

    .cardText p{
        margin: 1rem 0;
    }

    .cardText h6{
        font-size: 1.5rem;
    }
    
    .cardImg{
        margin:7rem 2rem;
        border-radius: 2rem;
        max-height: 15rem;
        align-self: baseline;
    }
</style>
