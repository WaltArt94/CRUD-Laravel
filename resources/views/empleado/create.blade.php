
@extends('layouts.app')

@section('content')
<div class="container">

<h2>Crear nuevo empleado: </h2>


@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    

@endif

<form  action="{{ url('/empleado')}}" method="post" enctype="multipart/form-data">
@csrf    

<label for="Nombre">Nombre </label>
    <input class="form-control" type="text" name="Nombre"    id="Nombre">
    <br>
    <label for="Apellido">Apellido </label>
    <input class="form-control" type="text" name="Apellido"   id="Apellido">
    <br>
    <label for="Correo">Correo </label>
    <input class="form-control" type="text" name="Correo"   id="Correo">
    <br>
    <label for="Foto">Foto</label>

    
    <input class="form-control" type="file" name="Foto" value="" id="Foto">
    <br>
    <div class="col text-center">
    <input class="btn btn-primary" type="submit" value="Guardar datos" onclick="return alert('Datos guardados?'">
    
    </div>
    <br>
    <br>

</form>

<div>
    <a href="/sistema/public/empleado/" class="btn btn-success">Ir a inicio </a>
</div>

</div>
@endsection