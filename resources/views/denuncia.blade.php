<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Denuncia</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .title {
            color: royalblue;
            font-size: 60px;
        }


        .logo {
            position: absolute;
            top: -40px;
            right: 1200px;
            width: 300px;
            height: 200px;
        }

        .header {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
        }

        .back-button {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="/" class="btn btn-danger float-right">Cancelar</a>
            <h1 class="title text-center">Formulario de Denuncia</h1>
            <img src="https://gc1holding.com/wp-content/uploads/2018/02/Logo-coppel.png" alt="Logo" class="logo">
        </div>

        <!-- Paso 1: Datos de la denuncia -->
        <form action="{{ route('denuncia.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <h3 class="form-title">DATOS DE LA DENUNCIA</h3>
                <label for="empresas_id">Empresa / Organización:</label>
                <select class="form-control" id="empresas_id" name="empresas_id">
                    <option value="">Seleccione una empresa</option>
                    <option value="1">Afore Coppel</option>
                    <option value="2">BanCoppel</option>
                    <option value="3">Coppel</option>
                </select>
            </div>
            <div class="form-group">
                <label for="paises_id">País:</label>
                <select class="form-control" id="paises_id" name="paises_id">
                    <option value="">Seleccione un país</option>
                    <option value="2">Argentina</option>
                    <option value="3">Estados Unidos</option>
                    <option value="1">México</option>
                </select>
            </div>
            <div class="form-group">
                <label for="estados_id">Estado:</label>
                <select class="form-control" id="estados_id" name="estados_id">
                    <option value="">Seleccione un estado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numero_centro">Número de centro:</label>
                <input type="number" class="form-control" id="numero_centro" name="numero_centro" required>
            </div>
            <!-- Paso 2: Contacto -->
            <div class="form-group">
                <h3 class="form-title">DATOS DE CONTACTO</h3>
                <label for="anonimo">Quiero permanecer anónimo:</label>
                <select class="form-control" id="anonimo" name="">
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
            </div>

            <div id="camposContacto" style="display: none;">
                <div class="form-group">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" class="form-control" id="correo" name="correo">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono">
                </div>
            </div>

            <div class="form-group">
                <h3 class="form-title">DETALLES DE LA DENUNCIA</h3>
                <label for="detalle">Detalle de denuncia:</label>
                <textarea class="form-control" id="detalle" name="detalle" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha en la que sucedieron los hechos:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Crear contraseña para el seguimiento a esta denuncia:</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" minlength="8" required>
            </div>
            <div class="form-group">
                <label for="confirm_contrasena">Confirmar contraseña:</label>
                <input type="password" class="form-control" id="confirm_contrasena" name="" minlength="8"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Estados correspondientes a cada país con valores numéricos
        const estadosPorPais = {
            "2": {
                BuenosAires: 1
            },
            "3": {
                California: 2
            },
            "1": {
                Aguascalientes: 3,
                Campeche: 4,
                CDMX: 5
            }
        };
        // Obtener elementos del formulario
        const paisSelect = document.getElementById("paises_id");
        const estadoSelect = document.getElementById("estados_id");
        const anonimoSelect = document.getElementById("anonimo");
        const camposContacto = document.getElementById("camposContacto");
        // Event listener para el cambio de país
        paisSelect.addEventListener("change", function() {
            const paisSeleccionado = paisSelect.value;
            const estados = estadosPorPais[paisSeleccionado] || {};

            // Limpiar opciones anteriores
            estadoSelect.innerHTML = "<option value=''>Seleccione un estado</option>";

            // Agregar opciones de estados correspondientes con valores numéricos
            for (const estado in estados) {
                const opcion = document.createElement("option");
                opcion.value = estados[estado];
                opcion.textContent = estado;
                estadoSelect.appendChild(opcion);
            }
        });

        // Event listener para el cambio de anonimato
        anonimoSelect.addEventListener("change", function() {
            const esAnonimo = anonimoSelect.value === "si";
            camposContacto.style.display = esAnonimo ? "none" : "block";

            // Limpiar los campos de contacto si se elige ser anónimo
            if (esAnonimo) {
                document.getElementById("nombre").value = "";
                document.getElementById("correo").value = "";
                document.getElementById("telefono").value = "";
            }
        });
    </script>
</body>

</html>

</html>
