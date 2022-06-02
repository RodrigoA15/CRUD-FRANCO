@extends('Templete.Templete')
@section('plantillaweb')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Direccion</th>
        <th scope="col">Correo</th>
        <th scope="col">Telefono</th>
        <th scope="col">Nivel Academico</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $i)

      <tr>
        <th scope="row">{{$i->id}}</th>
        <td>{{$i->nombre}}</td>
        <td>{{$i->nombre}}</td>
        <td>{{$i->apellido}}</td>
        <td>{{$i->direccion}}</td>
        <td>{{$i->correo}}</td>
        <td>{{$i->telefono}}</td>
        <td>{{$i->nivel_academico}}</td>


      </tr>
      @endforeach
    </tbody>
    
  </table>
  {{$teachers->links()}}
@endsection