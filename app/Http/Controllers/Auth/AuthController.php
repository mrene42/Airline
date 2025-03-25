<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*Mostrar el formulario de login*/
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /*Mostrar el formulario de registro*/
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /*Registrar un nuevo usuario*/
    public function register(Request $request)
    {
        // Validación de datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Crear el nuevo usuario
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Iniciar sesión al usuario recién registrado
        Auth::login($user);

        return redirect()->route('flightHome')->with('success', 'Registration successful!');
    }

    /*Iniciar sesión*/
    public function login(Request $request)
    {
        // Validar los datos de inicio de sesión
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($validated)) {
            // Redirigir al usuario a la página principal
            return redirect()->route('flightHome')->with('success', 'Login successful!');
        }

        // Si no se pudo autenticar, volver al login con error
        return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }

    /*Cerrar sesión*/
    public function logout()
    {
        Auth::logout();
        return redirect()->route('flightHome')->with('success', 'You have been logged out.');
    }
}
