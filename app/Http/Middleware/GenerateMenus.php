<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('MenuTopPC', function ($menu) {
           // dd($menu->add());
            $menu->add('Home');
            $menu->add('Producten', 'products');
            $menu->add('Over ons', 'about');
            $menu->add('Contact', 'contact');
        });
        
        return $next($request);
    }
}