<div class="proyectCard">
    <div class="cardText">
        <h3>{{$proyect->tittle}}</h3>
        <p>{{$proyect->sh_description}}</p>
        <h6>{{$proyect->created_at->diffForHumans()}}</h6>
        <button class="cardButton">Lorem ipsum</button>
    </div>
    <img class="cardImg" src="{{$proyect->url_photo}}" alt="photo">
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

    }

    .cardText h3{
        font-size: 2.5rem;
        color: var(--middlePurple);
        margin-bottom: 3rem;
    }

    .cardText p{
        font-size: 2rem;
        margin: 1rem 0;
    }
    
    .cardText h6{
        font-size: 1.7rem;
    }

    .cardImg{
        border-radius: 2rem;
        max-height: none;
    }

    .cardButton{
        padding: 1rem;
        margin: 4rem auto;
        background: linear-gradient(90deg, rgba(147,64,255,1) 51%, rgba(255,60,95,1) 100%);
        border-radius: 1.5rem;
        font-size: 2rem;
    }
</style>