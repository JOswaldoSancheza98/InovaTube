
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
                            @include('usuario.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  