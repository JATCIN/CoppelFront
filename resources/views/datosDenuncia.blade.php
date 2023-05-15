<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DENUNCIA CREADA EXITOSAMENTE </h1>
    <h1>Datos de tu Denuncia</h1>
   
    
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
                <td>{{ $data['folio'] }}</td>
                <td>{{ $data['contraseña'] }}</td>
                <td>{{ $data['detalle'] }}</td>
            </tr>
      
          
        </tbody>
    </table>
</body>
</body>
</html>