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

    <!--data tables-->
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />

</head>

<body>
    <h1>DENUNCIAS</h1>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>FOLIO</th>
                <th>EMPRESA</th>
                <th>DENUNCIANTE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $denuncia)
                <tr>
                    <td>{{ $denuncia['folio'] }}</td>
                    <td>{{ $denuncia['empresas_id'] }}</td>
                    <td>{{ $denuncia['usuarios_id'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--data tables-->
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script src= "./public/resouces/js/script.js"></script>
    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
