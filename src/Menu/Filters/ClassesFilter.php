<?php

namespace HzHboIct\LaravelCoreUI\Menu\Filters;

use HzHboIct\LaravelCoreUI\Menu\Builder;

class ClassesFilter implements FilterInterface
{
    public function transform($item, Builder $builder)
    {
        if (! isset($item['header'])) {
            $item['classes'] = $this->makeClasses($item);
            $item['class'] = implode(' ', $item['classes']);
        }

        return $item;
    }

    private function makeClasses($item)
    {
        $classes = [];

        if ($item['active']) {
            $classes[] = 'active';
        }

        return $classes;
    }
}
