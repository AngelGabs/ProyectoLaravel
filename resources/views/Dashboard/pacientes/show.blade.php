@extends('layout.main_template')

@section('content')
<h1>Index Pacientes</h1>
<br>
<button><a href="{{route('citas.create')}}">Crear Cita</a></button>
<button><a href="{{route('citas.index')}}">Mostrar Cita</a></button>
    <button><a href="{{route('pacientes.create')}}">Registrar Paciente</a></button>
    <button><a href="{{route('pacientes.index')}}">Mostrar Paciente</a></button>
<table>
    <thead>
        <th>Nombre del paciente</th>
        <th>Descripcion de la Paciente</th>
    </thead>
    <tbody>
        @foreach ($pacientes as $b)
                <tr>
                    <td>{{$b->pacient}}</td>
                    <td>{{$b->description}}</td>
                    <td>
                        <button><a href="{{route("pacientes.edit", $b)}}">Editar</a></button>
                        <form action="{{route('pacientes.destroy', $b)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </tbody>
</table>

@endsection

