@extends('Templete.Templete')
@section('plantillaweb')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre Materia</th>
                <th scope="col">Credito</th>
                <th scope="col">Costo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <th scope="row">{{ $subject->id }}</th>
                    <td>{{ $subject->nombre_subject }}</td>
                    <td>{{ $subject->credito }}</td>
                    <td>{{ $subject->costo }}</td>

            
                    <td><a href="{{ route('materias.edit', $subject) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true">Editar</a></td>
                    <td>
                        <form action="{{ route('materias.destroy', $subject) }}" class="d-inline" method="POST">
                            @method('DELETE')
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                           
                        </form>
                    </td>

                </tr>  
            @endforeach
        </tbody>

    </table>
    {{ $subjects->links() }}
@endsection
                                    