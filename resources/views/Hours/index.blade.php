@extends('Templete.Templete')
@section('plantillaweb')

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Hora Lunes</th>
            <th scope="col">Hora Martes</th>
            <th scope="col">Hora Miercoles</th>
            <th scope="col">Hora Jueves</th>
            <th scope="col">Hora Viernes</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($hora as $horas)
            <tr>
                <th scope="row">{{ $horas->id }}</th>
                <td>{{ $horas->hora_lunes }}</td>
                <td>{{ $horas->hora_martes }}</td>
                <td>{{ $horas->hora_miercoles }}</td>
                <td>{{ $horas->hora_jueves }}</td>
                <td>{{ $horas->hora_viernes }}</td>

              
                    <td>
                        <form action="{{ route('horas.destroy', $horas) }}" class="d-inline" method="POST">
                            @method('DELETE')
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                           
                        </form>
                    </td>
            

            </tr>
        @endforeach
    </tbody>

</table>
@endsection