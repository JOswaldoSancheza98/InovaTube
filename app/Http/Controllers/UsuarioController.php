<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
        return view('usuario.create');
    }
    public function login()
    {
        return view('usuario.index');
    }
    public function store(Request $request)
    {
        $datos=$request->all();
        //validacion de concidencia de datos
        if ($datos['password'] == $datos['password_confirmation']) {
            //Almacena los datos en la tabla
            Usuario::create($datos);

            return redirect('usuario') ->with("mensaje","El usuario se registro correctamente, ahora puede iniciar sesión");
        }
             
    }
}