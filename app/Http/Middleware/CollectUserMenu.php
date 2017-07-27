<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class CollectUserMenu
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
        $menu = new Menu;
        $menu->make('MyNavBar', function ($menu) {
            $menu->add('Dashboard');
            $menu->dashboard->add('My Dashboard');
                $menu->divide();
                $menu->dashboard->add('Manage Dashboard', 'home');

            $menu->add('Projects', 'projects');
            $menu->add('Issues', 'issues');
            $menu->add('Boards', 'boards');
            //$menu->add('<form class="navbar-form navbar-right"><button type="button" class="btn btn-info">Create</button></form>', 'button');
        });

        return $next($request);
    }
}
