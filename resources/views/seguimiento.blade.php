<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body {
            background-color: #dae635;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            position: absolute; /* Agrega una posición absoluta al container */
            top: 50%; /* Ajusta la posición verticalmente */
            left: 50%; /* Ajusta la posición horizontalmente */
            transform: translate(-50%, -50%); /* Centra el container en el medio de la pantalla */
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #e6ee46;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DENUNCIA</h1>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>FOLIO</th>
                    <th>COMENTARIOS</th>
                    <th>ESTATUS</th>
                </tr>
            </thead> 
            <tbody> 
                <tr>
                    <td>{{ $denuncia['folio'] }}</td>
                    <td>{{ $denuncia['comentarios'] }}</td>
                    <td>{{ $denuncia['estatus'] }}</td>
                </tr>
            </tbody>
        </table>

        <div class="gray-box" style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%);">
            <button class="btn btn-primary" onclick="window.location.href='/'"> Listo</button>
        </div>

    <!-- Agrega la referencia a Bootstrap JS al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
