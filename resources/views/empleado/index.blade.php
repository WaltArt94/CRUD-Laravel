
@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<br>
<div>
        <a href="empleado/create" class="btn btn-success">Crear nuevo usuario </a>
</div>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$empleado->id}}</td>

            <td>
                <img  class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" width="100"  alt="">
            
            </td>


            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>
            
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning" > 
                Editar
            </a>
            |
            
            
                <form action="{{ url('/empleado/'.$empleado->id)}}" class="d-inline" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres eliminar dato?')" value="Borrar" class="btn btn-danger">
                    
                </form>    
            
            </td>
        </tr>
        @endforeach 
    </tbody>
   
</table>
{!! $empleados->links()!!}    
</div>
@endsection
