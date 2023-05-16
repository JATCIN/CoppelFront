<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--botsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<body>
    <h1>DENUNCIAS</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>FOLIO</th>
                <th>EMPRESA</th>
                <th>DENUNCIANTE</th>
                <th>ESTATUS</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $denuncia)
                <tr>
                    <td>{{ $denuncia['folio'] }}</td>
                    <td>{{ $denuncia['empresa']['nombre'] }}</td>
                    <td>{{ $denuncia['usuario']['nombre'] }}</td>
                    <td>{{ $denuncia['estatus'] }}</td>
                    <td>
                        <a href="{{route('denuncias.view',$denuncia['id']) }}">DETALLES</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

  
</body>

</html>
