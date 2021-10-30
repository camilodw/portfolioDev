@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <h3 class="h3">Hola, soy Camilo Oyarzo</h3>
                <p>Soy analista programador, actualmente vivo en la región de valparaíso de chile</p>
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
                    <a href="{{ $project->link_project }}" class="btn btn-outline-info text-white" target="_blank">Ver Proyecto</a>
                </div>
            @empty
                <span class="text text-danger">Proyectos no disponibles</span>
            @endforelse        
        </div>
            <div class="text-right">
                <a href="/projects" class="">Ver más projectos</a>
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
                <a href="/courses" class="">Ver más certificados</a>
            </div>
    </div>
@endsection