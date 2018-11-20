<?php

namespace HzHboIct\LaravelCoreUI\Menu\Filters;

use HzHboIct\LaravelCoreUI\Menu\Builder;
use HzHboIct\LaravelCoreUI\Menu\ActiveChecker;

class ActiveFilter implements FilterInterface
{
    private $activeChecker;

    public function __construct(ActiveChecker $activeChecker)
    {
        $this->activeChecker = $activeChecker;
    }

    public function transform($item, Builder $builder)
    {
        if (! isset($item['header'])) {
            $item['active'] = $this->activeChecker->isActive($item);
        }

        return $item;
    }
}
