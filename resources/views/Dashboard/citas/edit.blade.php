@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Citas</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('citas.update', $citas->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Nombre de la cita</label>
    <input type="text" name="nameProduct" value="{{$product->nameProduct}}">
    <label for="">Marca</label>
    <select name= "brand_id">
        <option value="">Selecciona. . .</option>
        @foreach ($brands as $brand => $id )
        <option {{$product->brand_id == $id ? 'selected' : ''}} value="{{$id}}">{{$brand}}</option>
            
        @endforeach
    </select>

    <label for="">Cantidad</label>
    <input type="number" name="stock" value="{{$product->stock}}">
    
    <label for="">Precio Unitario</label>
    <input type="text" name="unit_price" value="{{$product->unit_price}}">

    <label for="">Imagen</label>
    <input type="file" name="imagen">

    <button type="submit">Registrar</button>
</form>

@endsection 