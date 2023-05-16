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
            background-color: #fbfbfb;
            padding: 20px;
        }
        .container {
            background-color: rgb(11, 181, 54);
            padding: 70px;
            border-radius: 5px;
            position: absolute;
            top: 50%; 
            left: 50%; 
            transform: translate(-50%, -50%); 
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
        }
        th, td {
            padding: 20px;
            text-align: left;
            border: 1px solid #000000;
        }
        .logo {
            position: absolute;
            top: -15px;
            left: 50px;
            max-width: 300px; /* Ajusta el tamaño de la imagen */
        }
    </style>
</head>
<body>
    <h1>LINEA DE DENUNCIA </h1>
    <img src="https://gc1holding.com/wp-content/uploads/2018/02/Logo-coppel.png" alt="Logo" class="logo">
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

        <button onclick="window.location.href = '/';" class="btn btn-primary">LISTO</button>

    <!-- Agrega la referencia a Bootstrap JS al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
