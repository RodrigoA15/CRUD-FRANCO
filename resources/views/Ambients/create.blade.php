@extends('Templete.Templete')
@section('plantillaweb')

<div class="container">
    
<h1>Ambientes</h1>
    <form action="{{route('ambientes.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Aula Lunes</label>
            <input type="year" class="form-control" name="aula_lunes">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Aula Martes</label>
            <input type="year" class="form-control" name="aula_martes">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Aula Miercoles</label>
            <input type="year" class="form-control" name="aula_miercoles">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Aula Jueves</label>
            <input type="year" class="form-control" name="aula_jueves">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Aula Viernes</label>
            <input type="year" class="form-control" name="aula_viernes">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
