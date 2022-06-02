@extends('Templete.Templete')
@section('plantillaweb')
    <form action="{{route('materias.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre_subject">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Credito</label>
            <input type="text" class="form-control" name="credito">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Costo</label>
            <input type="text" class="form-control" name="costo">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
