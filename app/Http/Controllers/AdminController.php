<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Gère la connexion d'un admin.
     */
    public function login(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Récupérer les informations d'identification
        $credentials = $request->only('email', 'password');

        // Tenter l'authentification
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        } else {
             // En cas d'échec, rediriger vers la page précédente avec une erreur
             return redirect()->route('home', ['#adminModal'])
                 ->withErrors(['login' => 'Email ou mot de passe incorrect']);

        }
    }

    /**
     * Affiche le tableau de bord admin.
     */
    public function index()
    {
        return redirect('/admin/login'); // Crée cette vue dans resources/views/admin/dashboard.blade.php
    }

    /**
     * Déconnecte l'admin.
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
    public function dashboard()
    {
        // Retourner une vue du tableau de bord Admin
        return view('admin.dashboard'); // Assurez-vous que la vue existe
    }
}
