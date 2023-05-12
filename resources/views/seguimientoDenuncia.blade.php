<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Seguimiento denuncia</h1>
    @if (session()->has('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif
    <form action="{{route('SeguimientoDenuncia.store')}}" method="POST">
        @csrf
        <label for="folio">Folio</label>
        <input type="text" name="folio" id="folio">
        <label for="contraseña">Contraseña</label>
        <input type="password" name="contraseña" id="contraseña">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>