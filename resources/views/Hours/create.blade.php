@extends('Templete.Templete')
@section('plantillaweb')

<div class="container">
    
<h1>Hora Ambientes</h1>
    <form action="{{route('horas.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Lunes</label>
            <input type="year" class="form-control" name="hora_lunes">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Martes</label>
            <input type="year" class="form-control" name="hora_martes">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Miercoles</label>
            <input type="year" class="form-control" name="hora_miercoles">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Jueves</label>
            <input type="year" class="form-control" name="hora_jueves">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Hora Viernes</label>
            <input type="year" class="form-control" name="hora_viernes">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
