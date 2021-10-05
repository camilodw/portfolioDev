@extends('layouts.app')
@section('content')
 
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 mt-3 text-center">
                <h5 class="h5">Sobre mí</h5>
            </div>
            <div class="col-10 col-lg-8 text-center">
                <p class="lead">Soy analista programador Chileno, vivo actualmente en la v región y soy amante de las caminatas el conocer lugares
                    rodeados de flora y fauna, los deportes de contacto y me encanta programar al lado de un buen té</p>
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <span>Mis videos subidos a youtube donde muestro lugares donde eh recorrido</span>
            </div>
            <div class="col-12 col-lg-6  text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LR51C-p1bpM" allowfullscreen></iframe>
                  </div>
            </div>
<div class="col-12 mt-3 text-center">
<span>Escucha mi playlist en Spotify</span>
</div>
            <div class="col-lg-6 col-12">
                <iframe src="https://open.spotify.com/embed/playlist/0M6pXMyEvyuU8reDJD9gaS?theme=0" width="100%"
                    height="80" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>

        </div>

    </div>

@endsection
