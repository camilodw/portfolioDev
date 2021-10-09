@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-2 col-lg-1">
                <a href="https://github.com/camilodw"  target="_blank">
                    <img src="{{ secure_asset('img/github.svg') }}" alt="github">
                </a>
           
            </div>
            <div class="col-12 text-center">
                Sigueme en mi github donde subo proyectos personales
            </div>
        </div>
        <div class="row justify-content-around">
            @forelse ($projects as $project)
                <div class="col-12 col-lg-5 bg-white border rounded text-start mt-3 text-center">
                    <span class="h5 text-primary">{{ $project->name }}</span>
                   <img src="{{$project->link_image  }}" alt="Proyecto {{$project->name }}" class="d-block w-100">
                    <p class="m-3">{{ Str::limit($project->description, 90) }}</p>
                    <div class="text-right">
                        <a href="{{ $project->link_project }}" target="_blank" class="btn btn-info text-white">Ir al proyecto</a>
                    </div>
                </div>
            @empty
                <span class="text text-danger">Proyectos no disponibles</span>
            @endforelse
        </div>
        <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination justify-content-center">
                {{ $projects->links() }}
            </ul>
        </nav>   
    </div>
@endsection