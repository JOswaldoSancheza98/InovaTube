<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - InovaTube</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    function onSubmit(token) {
        document.getElementById("registro-form").submit();
    }
    </script>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">InovaTube</a>
        </div>
    </nav>

    <!-- Formulario de Registro -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header text-center bg-dark text-white">
                        <h5>Crear Cuenta</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuario.store') }}" method="POST" id="registro-form">
                            @csrf

                            <div class="mb-2">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" required>
                            </div>

                            <div class="mb-2">
                                <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control form-control-sm" id="apellido_paterno" name="apellido_paterno" required>
                            </div>

                            <div class="mb-2">
                                <label for="apellido_materno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control form-control-sm" id="apellido_materno" name="apellido_materno">
                            </div>

                            <div class="mb-2">
                                <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control form-control-sm" id="nombre_usuario" name="nombre_usuario" required>
                            </div>

                            <div class="mb-2">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control form-control-sm" id="email" name="email" required>
                            </div>

                            <div class="mb-2">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control form-control-sm" id="password" name="password" required>
                            </div>

                            <div class="mb-2">
                                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control form-control-sm" id="password_confirmation" name="password_confirmation" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Verificación</label>
                                <div class="g-recaptcha" 
                                    data-sitekey="6LdSTSUrAAAAAJHVIYLavYj8N_yeudIA5xaDQn5A" 
                                    data-callback="onSubmit" 
                                    data-size="normal">
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark btn-sm">Registrar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
