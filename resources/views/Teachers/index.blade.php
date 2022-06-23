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
            @foreach ($teachers as $teacher)
                <tr>
                    <th scope="row">{{ $teacher->id }}</th>
                    <td>{{ $teacher->nombre }}</td>
                    <td>{{ $teacher->apellido }}</td>
                    <td>{{ $teacher->direccion }}</td>
                    <td>{{ $teacher->correo }}</td>
                    <td>{{ $teacher->telefono }}</td>
                    <td>{{ $teacher->nivel_academico }}</td>
                    <td><a href="{{ route('profesores.edit', $teacher->id) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true">Editar</a></td>
                    <td>
                        <form action="{{ route('profesores.destroy', $teacher) }}" class="d-inline" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>
    {{ $teachers->links() }}
@endsection
