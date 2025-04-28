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
    <input type="password" class="form-control form-control-sm" id="password_confirmation" name="password_confirmation"
        required>
</div>

<div class="mb-3">
    <label class="form-label">Verificación</label>
    <div class="g-recaptcha" data-sitekey="6LdSTSUrAAAAAJHVIYLavYj8N_yeudIA5xaDQn5A" data-callback="onSubmit"
        data-size="normal">
    </div>
</div>

<div class="d-grid gap-2">
    <button type="submit" class="btn btn-dark btn-sm">Registrar</button>
</div>