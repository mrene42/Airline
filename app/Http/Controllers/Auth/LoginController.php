<?php


namespace App\Http\Controllers\Auth;


use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    use AuthenticatesUsers;


    /**
     * Dónde redirigir a los usuarios después del login.
     *
     * @var string
     */
    protected $redirectTo = '/';


    /**
     * Crear una nueva instancia del controlador.
     *
     * Aplica middleware para restringir el acceso a usuarios autenticados.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout'); // Solo los invitados pueden acceder al login
        $this->middleware('auth')->only('logout'); // Solo usuarios autenticados pueden cerrar sesión
    }
}
