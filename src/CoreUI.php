<?php

namespace HzHboIct\LaravelCoreUI;

use HzHboIct\LaravelCoreUI\Events\BuildingMenu;
use HzHboIct\LaravelCoreUI\Menu\Builder;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;

class CoreUI
{
    /**
     * @var array
     */
    protected $menu;

    /**
     * @var array
     */
    protected $filters;

    /**
     * @var Dispatcher
     */
    protected $events;

    /**
     * @var Container
     */
    protected $container;

    public function __construct(array $filters, Dispatcher $events, Container $container)
    {
        $this->filters = $filters;
        $this->events = $events;
        $this->container = $container;
    }

    public function menu(): array
    {
        if (! $this->menu) {
            $this->menu = $this->buildMenu();
        }

        return $this->menu;
    }

    protected function buildMenu(): array
    {
        $builder = new Builder($this->buildFilters());

        $this->events->fire(new BuildingMenu($builder));

        return $builder->getMenu();
    }

    protected function buildFilters(): array
    {
        return array_map([$this->container, 'make'], $this->filters);
    }
}
