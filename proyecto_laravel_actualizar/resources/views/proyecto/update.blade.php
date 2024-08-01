
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Editar Proyecto</h1>
    <form action="{{ route('proyecto.update', $proyecto->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyecto->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="lider">Líder</label>
            <input type="text" class="form-control" id="lider" name="lider" value="{{ $proyecto->lider }}" required>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Actualizar</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
