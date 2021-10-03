@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @forelse ($courses as $links)
            <div class="col-12 col-lg-6 mt-2">
                <img src="{{ $links->link }}" alt="Certificado de {{ $links->name }}" class="d-block w-100">
            </div>
            @empty
                <span class="text text-danger">Certificados no disponibles</span>
            @endforelse           
        </div>
    </div>
@endsection