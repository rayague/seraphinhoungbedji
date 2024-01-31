<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Events\UserLoggedIn;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Tente de s'authentifier avec les informations fournies
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'authentification a réussi
            $user = Auth::user();

            // Vérifiez si l'utilisateur a l'email spécifié
            if ($user->email === 'houngbedjiseraphin94@gmail.com') {
                $loginTime = Carbon::now();
                event(new UserLoggedIn($user, $loginTime)); 


                $request->session()->regenerate();

                // Rediriger vers la page spécifique (par exemple, la page d'accueil)
                return redirect()->intended(app('router')->has('admin') ? route('admin') : '/');
            }
        }

        // Si les informations d'identification ne correspondent pas
        return back()->withErrors(['email' => 'Les informations d\'identification ne sont pas valides.']);
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
