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

    /**
     * Adds individual menu items to the generated menu
     */
    public function add(): void
    {
        $items = $this->transformItems(func_get_args());

        foreach ($items as $item) {
            $this->menu[] = $item;
        }
    }

    /**
     * Returns the generated menu
     * @return array
     */
    public function getMenu(): array
    {
        return $this->menu;
    }

    /**
     * Reads menu items for the configuration files and transforms them with all the available filters, so they can
     * easily be used within blade files.
     * @param array $items
     * @return array
     */
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
