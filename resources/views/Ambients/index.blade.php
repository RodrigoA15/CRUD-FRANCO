@extends('Templete.Templete')
@section('plantillaweb')
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Lunes</th>
            <th scope="col">Martes</th>
            <th scope="col">Miercoles</th>
            <th scope="col">Jueves</th>
            <th scope="col">Viernes</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($ambientes as $ambiente)
            <tr>
                <th scope="row">{{ $ambiente->id }}</th>
                <td>{{ $ambiente->aula_lunes }}</td>
                <td>{{ $ambiente->aula_martes }}</td>
                <td>{{ $ambiente->aula_miercoles }}</td>
                <td>{{ $ambiente->aula_jueves }}</td>
                <td>{{ $ambiente->aula_viernes }}</td>


                <td>
                    <form action="{{ route('ambientes.destroy', $ambiente) }}" class="d-inline" method="POST">
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