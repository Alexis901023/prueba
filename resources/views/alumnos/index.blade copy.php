<table>
    <thead>
        <tr>
            <th>Nombre</th>  
            <th>Apellidos</th>   
            <th>Edad</th> 
            <th>Acciones</th> 
        </tr>
    </thead>

    <tbody>
    @foreach($alumnos as $alumno)
        <tr>
            <td> {{$alumno->nombre}}<td>
            <td> {{$alumno->apellidos}}<td>
            <td> {{$alumno->edad}}<td>
            <td>    
            Editar
            <form method="post" action="{{ url('/alumnos/'.$alumno->id) }}">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" onclick="return confirm('Borrar');">Borrar</button>
            </from>
            </td>
            
        </tr>
    @endforeach
    </tbody>

    
</table>

<a href="/alumnos/{{$alumno->id}}/edit">
        Editar Alumnos
    </a>
