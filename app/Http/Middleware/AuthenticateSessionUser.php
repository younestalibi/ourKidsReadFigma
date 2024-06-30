<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateSessionUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

        // Check if the user is authenticated in the session
        if (!session()->has('id')) {
            return redirect()->route('reading-portal-register')->with('error', 'User does not exist.');
        }
        $userId = $request->session()->get('id');

        $registeredUser = DB::table('tbl_user')->where('id', $userId)->first();
        if (!$registeredUser) {
            return redirect()->route('reading-portal-register')->with('error', 'User does not exist.');
        }

        // User is authenticated, proceed with the request
        return $next($request);
    }
}
