<?php

namespace HzHboIct\LaravelCoreUI\Menu\Filters;

use HzHboIct\LaravelCoreUI\Menu\Builder;

interface FilterInterface
{
    /**
     * Transform a bare menu item with the available filter.
     * @param array|string $item
     * @param Builder $builder
     * @return mixed
     */
    public function transform($item, Builder $builder);
}
