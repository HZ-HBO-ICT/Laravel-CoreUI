<?php

namespace HzHboIct\LaravelCoreUI\Menu;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\UrlGenerator;

class ActiveChecker
{
    /**
     * @var Request 
     */
    private $request;

    /**
     * @var UrlGenerator 
     */
    private $url;

    public function __construct(Request $request, UrlGenerator $url)
    {
        $this->request = $request;
        $this->url = $url;
    }

    /**
     * Checks whether the current menu item should be highlighted in the menu
     * @param array $item
     * @return bool
     */
    public function isActive(array $item)
    {
        if (isset($item['active'])) {
            return $this->isExplicitActive($item['active']);
        }

        if (isset($item['submenu'])) {
            return $this->containsActive($item['submenu']);
        }

        if (isset($item['href'])) {
            return $this->checkExactOrSub($item['href']);
        }

        return false;
    }
    
    private function checkExactOrSub($url): bool 
    {
        return $this->checkExact($url) || $this->checkSub($url);
    }

    private function checkExact($url): bool
    {
        return $this->checkPattern($url);
    }

    private function checkSub($url): bool
    {
        return $this->checkPattern($url.'/*') || $this->checkPattern($url.'?*');
    }

    private function checkPattern($pattern): bool
    {
        $fullUrlPattern = $this->url->to($pattern);

        $fullUrl = $this->request->fullUrl();

        return Str::is($fullUrlPattern, $fullUrl);
    }

    private function containsActive($items): bool
    {
        foreach ($items as $item) {
            if ($this->isActive($item)) {
                return true;
            }
        }

        return false;
    }

    private function isExplicitActive($active): bool
    {
        foreach ($active as $url) {
            if ($this->checkExact($url)) {
                return true;
            }
        }

        return false;
    }
}
