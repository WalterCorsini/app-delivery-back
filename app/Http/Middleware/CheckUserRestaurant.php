<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;


class CheckUserRestaurant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $userHasRestaurant = Restaurant::where('user_id', Auth::id())->exists();
            view()->share('userHasRestaurant', $userHasRestaurant);
        }
        return $next($request);
    }
}
