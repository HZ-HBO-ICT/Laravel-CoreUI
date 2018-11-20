<?php

namespace HzHboIct\LaravelCoreUI\Menu\Filters;

use HzHboIct\LaravelCoreUI\Menu\Builder;

class SubmenuFilter implements FilterInterface
{
    public function transform($item, Builder $builder)
    {
        if (isset($item['submenu'])) {
            $item['submenu'] = $builder->transformItems($item['submenu']);
            $item['submenu_open'] = $item['active'];
        }

        return $item;
    }
}
