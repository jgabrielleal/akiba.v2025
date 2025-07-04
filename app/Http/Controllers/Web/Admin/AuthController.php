<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Inertia\Inertia;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

          return redirect()->intended(route('dashboard.render.painel'))->with('flash', [
                'type' => 'success',
                'message' => 'Hajimemashite~! Bem-vindo~ (☆ω☆)',
            ]);
        }

            return redirect()->back()->with('flash', [
                'type' => 'error',
                'message' => "Nani?! Errou o acesso, senpai~ (＞人＜;)",
            ]);
    }

    public function render()
    {
        return Inertia::render('Admin/Auth');
    }

}
