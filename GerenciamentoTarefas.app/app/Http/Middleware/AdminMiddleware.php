<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado e se é administrador
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            // Se não for admin, redireciona para a página inicial ou qualquer outra página
            return redirect('/');
        }

        // Se for admin, permite continuar a solicitação
        return $next($request);
    }
}
