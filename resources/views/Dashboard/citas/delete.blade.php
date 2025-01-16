@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<style>
    button{
        width: 50px;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #000;
        border-radius: 5px;
        display: block;
        color: #fff;
        background-color: #000;
    }

    h3{
        width: 100%;
        height: 10px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
    }
</style>
<center>
<table>
    <thead>
        <h3>¿Estas seguro que quieres 
        eliminar la cita {{$cita->paciente_id}}?</h3>
    </thead>
    <tbody>
        <tr>
            <td>
                <form action="{{route('citas.index')}}">
                    <button type="submit"> No </button>
                </form>
            </td>
            <td>
                <form action="{{route('citas.destroy', $citas->id)}}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit"> Si </button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
</center>
</form>

@endsection 