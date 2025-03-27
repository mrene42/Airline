<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Redireccionar después del registro.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Crear una nueva instancia del controlador.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Mostrar el formulario de registro.
     */
    public function showRegistrationForm()
    {
        return view('auth.register'); // Asegúrate de que esta vista existe
    }

    /**
     * Manejar el registro de usuarios.
     */
    public function register(Request $request)
    {
        // Validación de datos
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Iniciar sesión automáticamente
        Auth::login($user);

        return redirect($this->redirectTo)->with('success', 'Registration successful!');
    }
}
