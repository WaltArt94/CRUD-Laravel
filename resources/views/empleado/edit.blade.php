@extends('layouts.app')

@section('content')
<div class="container">

<h2>Editar datos del empleado: </h2>

<form  action="{{ url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH')}}



@include('empleado.form')
</form>
 
<div>
    <a class="btn btn-success" href="/sistema/public/empleado/">Ir a inicio </a>
</div>
</div>
@endsection