

<label for="Nombre">Nombre </label>
    <input class="form-control" type="text" name="Nombre" value="{{ $empleado->Nombre}}"    id="Nombre">
    <br>
    <label for="Apellido">Apellido </label>
    <input class="form-control" type="text" name="Apellido" value="{{ $empleado->Apellido}}"   id="Apellido">
    <br>
    <label for="Correo">Correo </label>
    <input class="form-control" type="text" name="Correo" value="{{ $empleado->Correo}}"   id="Correo">
    <br>
    <label for="Foto">Foto</label>

    
    <img  src="{{ asset('storage').'/'.$empleado->Foto}}" width="100" alt="">

    <input class="form-control" type="file" name="Foto" value="" id="Foto">
    <br>
    
    <div class="col text-center">
    <input class="btn btn-primary" type="submit" value="Guardar datos" onclick="return confirm('Datos guardados?'">
    
    </div>
    <br>