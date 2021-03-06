@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <h3 class="h3">Hola, soy Camilo Oyarzo</h3>
                <p>Soy Desarrollador web, me dedico a desarrollar páginas web responsive para que tu página se adapte a cualquier dispositivo</p>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 text-center">
                <span class="h5 text-primary">Proyectos</span>
            </div>
            @forelse ($projects as $project)
                <div class="col-12 col-lg-5 bg-white border rounded text-center mt-3">
                    <span class="text text-primary h5">{{ $project->name }}</span>
                    <img src="{{ $project->link_image }}" alt="{{ $project->name }}" class="d-block w-100">
                    <a href="{{ $project->link_project }}" class="btn text-primary" target="_blank">Ver Proyecto</a>
                </div>
            @empty
                <span class="text text-danger">Proyectos no disponibles</span>
            @endforelse        
        </div>
            <div class="text-right">
                <a href="/projects" class="btn text-primary">Ver más projectos</a>
            </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 text-center">
                <span class="h5 text-primary">Certificados</span>
            </div>
            @forelse ($courses as $courses)
                <div class="col-12 col-lg-5 bg-white rounded border">
                    <img src="{{ $courses->link }}" alt="certificado {{ $courses->name }}" class="d-block w-100">
                </div>
            @empty
                <span class="text text-danger">Certificados no disponibles</span>
            @endforelse
        </div>
            <div class="text-right">
                <a href="/courses" class="btn text-primary">Ver más certificados</a>
            </div>
    </div>
@endsection