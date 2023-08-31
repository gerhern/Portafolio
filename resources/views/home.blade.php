    @extends('layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/home/homeStyles.css')}}">
<div class="container">
    <section class="landing">
        <div class="descriptionBox">
            <h1>Lorem ipsum dolor.</h1>
            <h3><span class="importantSpan">Lorem ipsum dolor, </span>sit amet consectetur adipisicing elit.</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam quae enim expedita commodi consequuntur corrupti itaque, aliquam sapiente cum facilis. A unde exercitationem maxime. Non provident dignissimos neque vero doloribus.</p>
            <div class="media">
                <a href="#">
                    <img class="mediaImg" src="https://picsum.photos/50" alt="lorem">
                </a>
                <a href="#">
                    <img class="mediaImg" src="https://picsum.photos/50" alt="ipsum">
                </a>

            </div>
        </div>
    </section>
    <section class="projects">
        <h2 class="sectionTittle">Lorem ipsum, dolor.</h2>
        @forelse($projects as $project)
            <x-proyect :proyect="$project"></x-proyect>
        @empty
            <div class="noProjectBox">
                <h5 class="importantSpan">Lorem ipsum</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque tempora dolore nam sunt mollitia aliquam, quas reiciendis assumenda ratione, vitae ipsa ad fuga? Harum sit vitae pariatur iste commodi deleniti!</p>
            </div>
        @endforelse
    </section>
</div>
@endsection