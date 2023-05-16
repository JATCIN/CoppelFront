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
            background-color: #f8f9fa;
        }
        .container {
            max-width: 500px;
            margin-top: 100px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: #fff;
        }
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Agrega clases de Bootstrap para el estilo -->
        <h1 class="text-center text-success">DENUNCIA CREADA EXITOSAMENTE</h1>
        <h1 class="text-center">Datos de tu Denuncia</h1>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>FOLIO</th>
                    <th>CONTRASEÑA</th>
                    <th>DETALLE</th>
                </tr>
            </thead> 
            <tbody> 
                <tr>
                    <td>{{ $denuncia['folio'] }}</td>
                    <td>{{ $denuncia['contraseña'] }}</td>
                    <td>{{ $denuncia['detalle'] }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Agrega el botón de "Listo" -->
        <div class="button-container">
            <a href="/" class="btn btn-secondary">LISTO</a>
        </div>
    </div>

    <!-- Agrega la referencia a Bootstrap JS al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>