@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            @forelse ($courses as $links)
            <div class="col-12 col-lg-5 mt-2">
                <img src="{{ $links->link }}" alt="Certificado de {{ $links->name }}" class="d-block w-100">
            </div>
            @empty
                <span class="text text-danger">Certificados no disponibles</span>
            @endforelse          
        </div>
        <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination justify-content-center">
                {{ $courses->links() }}
            </ul>
        </nav>   
    </div>
@endsection