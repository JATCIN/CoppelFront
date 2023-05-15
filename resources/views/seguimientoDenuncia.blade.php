<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seguimiento denuncia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
         .title {
            color: royalblue;
            font-size: 60px;
        }
        .white-box {
            background-color: white;
            padding: 5px;
            margin-left: 20px;
        }
            .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh;
            background-color: yellow;
            padding: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .title {
            text-align: center;
        }

        .form-container {
            width: 300px;
            margin-top: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-10">
                                <h1 class="title">Línea de Denuncia</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="yellow-box">
            <h1 class="title">Seguimiento denuncia</h1>

            @if (session()->has('error'))
                <script>
                    alert("{{ session('error') }}");
                </script>
            @endif

            <div class="form-container">
                <form action="{{route('SeguimientoDenuncia.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="folio">Folio</label>
                        <input type="text" name="folio" id="folio" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" id="contraseña" class="form-control">
                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <a href="/" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>