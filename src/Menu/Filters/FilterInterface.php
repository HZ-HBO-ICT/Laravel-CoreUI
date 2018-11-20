<?php

namespace HzHboIct\LaravelCoreUI\Menu\Filters;

use HzHboIct\LaravelCoreUI\Menu\Builder;

interface FilterInterface
{
    public function transform($item, Builder $builder);
}
