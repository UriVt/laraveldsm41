<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ExampleController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = new User();
        $user->nombre = $validatedData['nombre'];
        $user->email = $validatedData['email'];
        $user->save();

        return redirect()->back()->with('success', 'Datos guardados exitosamente.');
    }
}

