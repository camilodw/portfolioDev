@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <label>Contacto</label>  
<div class="col-12 text-center">
<a href="" style="text-decoration: none;" >
    <img src="{{ asset('img/linkedin.svg') }}" alt="">
</a>
<a href="" style="text-decoration: none;">
    <img src="{{ asset('img/twitter-6.svg') }}" alt="" width="40px">
</a>
</div>
</div>
<div class="row justify-content-center" >
<div class="col-12 col-lg-4 bg-white mb-3 mt-3 border rounded ">
    <form action="" class="form">
     <div class="form-group">
         <label for="">Nombre:</label>
        <input type="text" class="form-control">    
    </div>  
    <div class="form-group">
        <label for="" >Apellido:</label>
        <input type="text" class="form-control" type="text">    
    </div>   
    <div class="form-group">
        <label for="">Correo electrónico:</label>
        <input type="text" type="email" class="form-control">    
    </div>  
    <div class="form-group">
        <label for="">Escribe el motivo para contactarte conmigo</label>
        <textarea name="" id="" class="form-control"></textarea>
    </div>  
    <div class="text-center mb-2">  <input type="submit" class="btn btn-success form-control" value="Enviar"></div>
 
    </form>
</div>    
</div>    
</div>    
@endsection