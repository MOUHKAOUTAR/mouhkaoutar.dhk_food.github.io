<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GerantController extends Controller
{
    /**
     * Affiche le formulaire de connexion pour les gérants.
     */
    public function loginForm()
    {
        return view('index'); // Si ton formulaire de connexion admin est dans index.blade.php

    }

    /**
     * Gère la connexion d'un gérant.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('gerant')->attempt($credentials)) {
            return redirect()->intended('/gerant/dashboard'); // Redirige vers le tableau de bord gérant
        }

        // Renvoyer un message d'erreur en cas d'échec
        return redirect()->route('home', ['#gerantModal'])
        ->withErrors(['login' => 'Email ou mot de passe incorrect']);
    }

    /**
     * Affiche le tableau de bord gérant.
     */
    public function index()
    {
        return view('gerant.dashboard'); // Crée cette vue dans resources/views/gerant/dashboard.blade.php
    }

    /**
     * Déconnecte le gérant.
     */
    public function logout()
    {
        Auth::guard('gerant')->logout();
        return redirect('/gerant/login');
    }
    public function dashboard()
    {
        // Retourner une vue du tableau de bord Admin
        return view('gerant.dashboard'); // Assurez-vous que la vue existe
    }
}
