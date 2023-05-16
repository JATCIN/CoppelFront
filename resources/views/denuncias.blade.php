<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
        h1 {
            text-align: center;
            color: blue;
        }
    </style>
</head>
<body>
    <h1>DENUNCIAS</h1>
    <button onclick="window.location.href = '/dashboard';" class="btn btn-primary">Retroceder</button>
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
                    <a href="{{ route('denuncias.view', $denuncia['id']) }}">DETALLES</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <!-- Inicializar DataTables -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
