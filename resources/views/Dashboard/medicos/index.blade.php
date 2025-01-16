@extends('layout/main_template')

@section('content')



<h1>Clientes</h1>
<button><a href="{{route('medicos.create')}}">Registrar Medico</a></button>
<button><a href="{{route('medicos.index')}}">Detalles del Medico</a></button>
<br>
<br>
<table>
    <thead>
        <th>Nombre del Medico</th>
        <th>Especialidad</th>
        <th>Telefono</th>
        <th>Horario Disponible</th>
        <th>ACCIONES</th>
    </thead>
    <tbody>
        @foreach ($medicos as $c)
            <tr>
                <td>{{$c->nombre}}</td>
                <td>{{$c->especialidad}}</td>
                <td>{{$c->telefono}}</td>
                <td>{{$c->horario_disponible}}</td>
                <td>
                    <button><a href="{{route("medicos.show", $c)}}">Mostrar</a></button>
                    <button><a href="{{route("medicos.edit", $c)}}">Editar</a></button>
                </td>
                <td>
            <!-- Formulario para eliminar -->
            <form action="{{ route('medicos.destroy', $c->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <!-- Agregar confirmación antes de eliminar -->
                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este médico?')">Eliminar</button>
            </form>
        </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection