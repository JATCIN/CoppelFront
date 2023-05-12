<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Línea de Denuncia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .title {
            color: royalblue;
            font-size: 60px;
        }

        .background-image {
            position: relative;
            background-image: url('https://besthqwallpapers.com/Uploads/28-1-2017/12873/blue-yellow-abstract-geometric-pattern-rectangles-material-desing.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 88vh;
            /* Cambiar el valor para reducir la altura */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            position: absolute;
            top: -135px;
            left: 50px;
            max-width: 300px; /* Ajusta el tamaño de la imagen */
        }

        .white-box {
            background-color: white;
            padding: 5px;
            margin-left: 20px;
        }

        .gray-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgb(255, 255, 255);
            padding: 20px;
            text-align: center;
        }

        .gray-box button {
            margin-top: 10px;
        }
    </style>
</head>

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
    <div class="background-image">
        <img src="https://gc1holding.com/wp-content/uploads/2018/02/Logo-coppel.png" alt="Logo" class="logo">
        <div class="gray-box" style="position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%);">
            <h3>Registrar Nueva Denuncia</h3>
            <button class="btn btn-primary" onclick="window.location.href='/denuncia'"> Crear Denuncia</button>
        </div>
        <div class="gray-box" style="position: absolute; top: 65%; left: 50%; transform: translate(-50%, -50%);">
            <h3>Seguimiento de Denuncia</h3>
            <button class="btn btn-primary" onclick="window.location.href='/seguimientoDenuncia'"> Seguimiento de Denuncia</button>
        </div>
        <a href="/login" class="btn btn-primary" style="position: absolute; top: -80px; right: 10px;">Login</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
