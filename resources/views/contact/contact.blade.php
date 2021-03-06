@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <label>Contacto</label>
            <div class="col-12 text-center">
                <a href="https://www.linkedin.com/in/camilo-oyarzo/" style="text-decoration: none;">
                    <img src="{{ asset('img/linkedin.svg') }}" alt="">
                </a>
                <a href="https://twitter.com/oyarzodw" style="text-decoration: none;">
                    <img src="{{ asset('img/twitter-6.svg') }}" alt="" width="40px">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 bg-white mb-3 mt-3 border rounded ">
                <form action="{{ route('contact.store') }}" class="form" method="POST">
                    @csrf
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                       {{ Session::get('success') }} 
                    </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                       {{ Session::get('fail') }} 
                    </div>
        
                    @endif
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <span class="text-danger">@error('name')
                            {{ $message }}
                        @enderror</span>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="">Apellido:</label>
                        <span class="text-danger">@error('lastName')
                            {{ $message }}
                        @enderror</span>
                        <input type="text" class="form-control" type="text" name="lastName" id="lastName">
                    </div>
                    <div class="form-group">
                        <label for="">Correo electr??nico:</label>
                        <span class="text-danger">@error('email')
                            {{ $message }}
                        @enderror</span>
                        <input type="text" type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="">Escribe el motivo para contactarte conmigo</label>
                        <span class="text-danger">@error('message')
                            {{ $message }}
                        @enderror</span>
                        <textarea name="message" id="message" class="form-control"></textarea>
                    </div>
                    <div class="text-center mb-2"> <input type="submit" class="btn btn-success form-control" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection