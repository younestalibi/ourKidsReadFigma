<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthenticateSessionUser
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
        // Check if the user is authenticated in the session
        if (!session()->has('id')) {
            return redirect()->route('reading-portal-register')->with('error', 'User does not exist.');
        }
        $userId = $request->session()->get('id');

        $registeredUser = DB::table('tbl_user')->where('user_id', $userId)->first();
        if (!$registeredUser) {
            return redirect()->route('reading-portal-register')->with('error', 'User does not exist.');
        }

        // User is authenticated, proceed with the request
        return $next($request);
    }
}
