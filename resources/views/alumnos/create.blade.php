<html>
<h1>Foomulario de Alumnos</h1>
<form action="{{ url('alumnos')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<br>
<label for="nombre"> {{'nombre'}} </label>
<input type="text" name="nombre" id="nombre" value="">
</br>
<br>
<label for="apellidos"> {{'apellidos'}} </label>
<input type="text" name="apellidos" id="apellidos" value="">
</br>
<br>
<label for="edad"> {{'edad'}} </label>
<input type="text" name="edad" id="edad" value="">

</br>
<input type="submit" value="Agregar">

</form>



            <home-component></home-component>
        </div>

        @vite('resources/js/app.js')
