<!DOCTYPE html>
<html>
<head>
    <title>Ver Materia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Detalle de Materia</h1>
    <div class="form-group">
        <strong>Nombre:</strong>
        {{ $materia->nombre }}
    </div>
    <div class="form-group">
        <strong>Descripción:</strong>
        {{ $materia->descripcion }}
    </div>
    <div class="form-group">
        <strong>Créditos:</strong>
        {{ $materia->creditos }}
    </div>
    <div class="form-group">
        <strong>Tipo:</strong>
        {{ $materia->tipo }}
    </div>
    <div class="form-group">
        <strong>Valor Hora:</strong>
        {{ $materia->valor_hora }}
    </div>
    <div class="form-group">
        <strong>Estado:</strong>
        {{ $materia->estado }}
    </div>
    <a href="{{ route('materias.index') }}" class="btn btn-primary">Volver</a>
</div>
</body>
</html>
