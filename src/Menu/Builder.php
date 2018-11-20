<?php

namespace HzHboIct\LaravelCoreUI\Menu;

class Builder
{
    /**
     * @var array
     */
    private $menu = [];

    /**
     * @var array
     */
    private $filters;

    public function __construct(array $filters = [])
    {
        $this->filters = $filters;
    }

    public function add(): void
    {
        $items = $this->transformItems(func_get_args());

        foreach ($items as $item) {
            $this->menu[] = $item;
        }
    }

    public function getMenu(): array
    {
        return $this->menu;
    }

    public function transformItems($items): array
    {
        return array_filter(array_map([$this, 'applyFilters'], $items));
    }

    private function applyFilters($item)
    {
        if (is_string($item)) {
            return $item;
        }

        foreach ($this->filters as $filter) {
            $item = $filter->transform($item, $this);
        }

        return $item;
    }
}
