<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>SEGUIMIENTO DENUNCIA </h1>
    <form action="{{ route('denuncias.update') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $denuncia['id'] }}">
        <label for="estatus">ESTATUS</label>
        <select class="form-control" id="estatus" name="estatus" value="{{ $denuncia['estatus'] }}">
            <option value="">Seleccione una opccion</option>
            <option value="Cncelada">Cancelada</option>
            <option value="Finalizada">Finalizada</option>
        </select>
        <label for="comentarios">Comentarios:</label>
        <textarea class="form-control" id="comentarios" name="comentarios" value="{{ $denuncia['comentarios'] }}"></textarea>
        <button type="submit">Guardar</button>

</body>

</html>
