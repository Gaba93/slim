<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class CollectUserMenu
{
    protected $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->setNavbarLeft();

        return $next($request);
    }

    public function setNavbarLeft()
    {
        $this->menu->make('MyNavBar', function ($menu) {
            $menu->add('Dashboard');
            $menu->dashboard->add('My Dashboard');
            $menu->divide();
            $menu->dashboard->add('Manage Dashboard', 'home');

            $menu->add('Projects', 'projects');
            $menu->add('Issues', 'issues');
            $menu->add('Boards', 'boards');
        });
    }

}
