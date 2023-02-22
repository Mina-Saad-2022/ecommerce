<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class check_admin
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
        /** to check if clint admin open dashboard home page is not admin open ecommerce home page */

        if(Auth::user()->type === 'admin'){
            /** to redirect to dashboard for admin */
            return $next($request);
        }

        /**  to redirect to ecommerce for user  */
        return to_route('ecommerce.index_user');
    }
}
