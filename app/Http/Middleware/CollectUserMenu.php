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
        $this->setNavbarRight();

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
            //$menu->add('<form class="navbar-form navbar-right"><button type="button" class="btn btn-info">Create</button></form>', 'button');
        });
    }

    public function setNavbarRight()
    {
        $this->menu->make('NavbarRight', function ($menu) {
            $menu->add('<i class="glyphicon glyphicon-star"></i>');
            $menu->add('<i class="glyphicon glyphicon-cog"></i>', ['nickname' => 'cog']);
            $menu->cog->add('Administration', ['class' => 'dropdown-header']);
            $menu->cog->add('Roles');
            $menu->cog->add('Permissions');


            //$menu->add('<form class="navbar-form navbar-right"><button type="button" class="btn btn-info">Create</button></form>', 'button');
        });

        //dd($this->menu);
    }
}
