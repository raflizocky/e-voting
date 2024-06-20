<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userRole = $request->session()->get('userRole');
        $currentRoute = $request->route()->getName();

        if ($userRole === 'admin') {
            if (strpos($currentRoute, 'voter.') === 0) {
                return redirect()->route('dashboard.index')->with('error', 'Access Denied');
            }
            return $next($request);
        } elseif ($userRole === 'voter') {
            if (strpos($currentRoute, 'voter.') !== 0) {
                return redirect()->route('voter.index')->with('error', 'Access Denied');
            }
            return $next($request);
        } else {
            return redirect()->route('login')->with('error', 'Access Denied');
        }
    }
}
