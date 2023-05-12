<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Denuncia</h1>
    @if (session()->has('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif
    <table>
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
</body>
</html>