@extends('Templete.Templete')
@section('plantillaweb')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Año</th>
                <th scope="col">Periodo</th>
                <th scope="col">Profesor</th>
                <th scope="col">Materia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $group)
                <tr>
                    <th scope="row">{{ $group->id }}</th>
                    <td>{{ $group->anio }}</td>
                    <td>{{ $group->periodo }}</td>
                    <td>{{ $group->teacher_id }}</td>
                    <td>{{ $group->subject_id }}</td>


            
                    <td><a href="{{ route('grupos.edit', $group) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true">Editar</a></td>
                    <td>
                        <form action="" method="POST">
                            @method('DELETE')
                            {{ csrf_field() }}
                            <a href="{{ route('grupos.destroy', $group) }}" class="btn btn-danger btn-sm" role="button"
                                aria-disabled="true">Eliminar</a>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>
    {{ $groups->links() }}
@endsection
                                    