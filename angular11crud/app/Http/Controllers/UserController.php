<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //en este ejemplo se asume que en la bd, los campos de la tabla 'usuarios' son 'nombre' y 'contraseña'
    public function login(Request $request)
    {
        $user = User::where('nombre', $request->nombre)->first();
        if ($user && $request->contraseña == $user->contraseña) {
            // Se puede crear una variable de sesión con los datos del usuario logueado, en este caso se usa el método put() de la clase Session
            //Las variables de sesión son útiles para almacenar información del usuario logueado, como su nombre, correo, etc.
            //Las variables de sesión se pueden acceder desde cualquier parte de la aplicación, y se mantienen activas hasta que el usuario cierra sesión,
            // incluso si cierra el navegador o la pestaña.
            Session::put('user', $user);
            return redirect()->route('dashboard.index');
        } else {
            // Si falla el logim, usa el método redirect() concatenado con el método back() para redirigir al usuario a la página anterior.
            // además, concatena el método with() que recibe dos parámetros: el primero es el nombre de la variable que almacena el error,
            // y el segundo es el mensaje de error, la idea es que se muestre en el front
            return redirect()->back()->with('error', 'Nombre de usuario o contraseña incorrectos');
        }
    }
}
