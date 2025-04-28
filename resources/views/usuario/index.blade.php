@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="card p-4">
          <div class="text-center mb-3">
            <h4>Iniciar sesión</h4>
          </div>
          
          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario" />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" />
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
          </form>
          <div class="mt-3 text-center text-muted">
            ¿No tienes cuenta? <a href="#">Regístrate</a>
          </div>
        </div>
      </div>
    </div>
  </div>
