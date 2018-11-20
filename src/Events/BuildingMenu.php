<?php

namespace HzHboIct\LaravelCoreUI\Events;

use HzHboIct\LaravelCoreUI\Menu\Builder;

class BuildingMenu
{
    /**
     * @var Builder 
     */
    public $menu;

    public function __construct(Builder $menu)
    {
        $this->menu = $menu;
    }
}
