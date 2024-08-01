<!DOCTYPE html>
<html>
<head>
    <title>Editar Materia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Editar Materia</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('materias.update', $materia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $materia->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $materia->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="creditos">Créditos:</label>
            <input type="number" class="form-control" id="creditos" name="creditos" value="{{ $materia->creditos }}" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $materia->tipo }}" required>
        </div>
        <div class="form-group">
            <label for="valor_hora">Valor Hora:</label>
            <input type="number" step="0.01" class="form-control" id="valor_hora" name="valor_hora" value="{{ $materia->valor_hora }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" value="{{ $materia->estado }}" required>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('materias.index') }}" class="btn btn-primary">Volver</a>
    </form>
</div>
</body>
</html>
