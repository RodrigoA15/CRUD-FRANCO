@extends('Templete.Templete')
@section('plantillaweb')
<h1>Editar Materia</h1>
<form action="{{route('materias.update', $materias)}}" method="post">
    @method('PUT')
    {{ csrf_field() }}

    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre_subject" value="{{$materias->nombre_subject}}">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Credito</label>
        <input type="text" class="form-control" name="credito" value="{{$materias->credito}}">
    </div>
    <div class="col-lg-6 col-md-4 col-sm-2">
        <label for="" class="form-label">Costo</label>
        <input type="text" class="form-control" name="costo" value="{{$materias->costo}}">
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>

</form>
@endsection