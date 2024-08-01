<!DOCTYPE html>
<html>
<head>
    <title>Materias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Lista de Materias</h1>
    <a href="{{ route('materias.create') }}" class="btn btn-primary">Crear Materia</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Créditos</th>
            <th>Tipo</th>
            <th>Valor Hora</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        @foreach ($materias as $materia)
            <tr>
                <td>{{ $materia->id }}</td>
                <td>{{ $materia->nombre }}</td>
                <td>{{ $materia->descripcion }}</td>
                <td>{{ $materia->creditos }}</td>
                <td>{{ $materia->tipo }}</td>
                <td>{{ $materia->valor_hora }}</td>
                <td>{{ $materia->estado }}</td>
                <td>
                    <a href="{{ route('materias.show', $materia->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
