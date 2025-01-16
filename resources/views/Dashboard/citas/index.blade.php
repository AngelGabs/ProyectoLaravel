@extends('layout/main_template')

@section('content')
    <h1>Index Citas</h1>
    <br>
    
    <button><a href="{{route('citas.create')}}">Crear Cita</a></button>
    <button><a href="{{route('citas.index')}}">Mostrar Citas</a></button>
   


    <br>
    <table>
        <thead>
            <th>Nombre del paciente</th>
            <th>Medico </th>
            <th>Fecha </th>
            <th>Hora</th>
            
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($citas as $p)
                <tr>
                    <td>{{$p->paciente_id}}</td>
                    <td>{{$p->medico->medico_id}}</td>
                    <td>{{$p->cita->fecha_cita}}</td>
                    <td>{{$p->hora_cita}}</td>
                    <td>
                        <button><a href="{{route("citas.show", $p)}}">Mostrar</a></button>
                        <button><a href="{{route("citas.edit", $p)}}">Editar</a></button>
                        <button><a href="{{route("citas.delete", $p)}}">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$citas->links()}} <!-- Genera los enlaces de cada página --> 
@endsection