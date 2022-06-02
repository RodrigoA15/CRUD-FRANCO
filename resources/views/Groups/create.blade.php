@extends('Templete.Templete')
@section('plantillaweb')
    <form action="{{route('grupos.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Año</label>
            <input type="year" class="form-control" name="anio">
        </div>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="" class="form-label">Periodo</label>
            <input type="text" class="form-control" name="periodo">
        </div>
        <br>
        <div class="col-lg-6 col-md-4 col-sm-2">
            <select class="form-select" name="teacher_id">
            <option selected="true" disabled="disabled">Profesores</option>
            @foreach ($teachers as $i)
            <option value="{{$i->id}}">{{$i->nombre}} {{$i->apellido}} </option>
            @endforeach
            </select>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-2">
            <select class="form-select" name="subject_id">
            <option selected="true" disabled="disabled">Materia</option>
            @foreach ($materias as $s)                                                                                                                                                                                                                                                                                  
            <option value="{{$s->id}}">{{$s->nombre_subject}}</option>
            @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection
