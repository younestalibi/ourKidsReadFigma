<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Student
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
        $userId = session('id');
       
        $item = DB::table('tbl_item_user')
            ->where('user_id', $userId)
            ->where('item_type_id', 12)
            ->first();

        if ($item->item_id == 2) {
            return redirect()->route('main-dashboard');
        }
        return $next($request);
    }
}
