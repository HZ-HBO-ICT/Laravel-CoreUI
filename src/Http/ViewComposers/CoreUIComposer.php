<?php

namespace HzHboIct\LaravelCoreUI\Http\ViewComposers;

use HzHboIct\LaravelCoreUI\CoreUI;
use Illuminate\View\View;

class CoreUIComposer
{
    /**
     * @var CoreUI
     */
    private $coreUI;

    public function __construct(CoreUI $coreUI)
    {
        $this->coreUI = $coreUI;
    }

    public function compose(View $view)
    {
        $view->with('coreUI', $this->coreUI);
    }
}
