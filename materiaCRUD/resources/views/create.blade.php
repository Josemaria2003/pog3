<!DOCTYPE html>
<html>
<head>
    <title>Crear Materia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Crear Materia</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>
        <div class="form-group">
            <label for="creditos">Créditos:</label>
            <input type="number" class="form-control" id="creditos" name="creditos" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        <div class="form-group">
            <label for="valor_hora">Valor Hora:</label>
            <input type="number" step="0.01" class="form-control" id="valor_hora" name="valor_hora" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" name="estado" required>
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
        <a href="{{ route('materias.index') }}" class="btn btn-primary">Volver</a>
    </form>
</div>
</body>
</html>
