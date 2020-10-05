<?php

return [

    /*
     * Application title to display in <title> tag
     */
    'title' => 'CoreUI Laravel Theme by HZ-HBO-ICT',

    /*
     * Text to put in the top-left of the menu bar. logo_mini is shown when the navbar is collapsed.
     * NOTE: This is a non-escaped string, so you can put HTML in here
     */
    'logo' => 'Core<strong>UI</strong>',

    /*
     * Menu builder
     */
    'menu' => [
//        [
//            'text' => 'Dashboard',          // The text to be displayed inside the menu.
//            'url' => 'admin/dashboard',     // The URL behind the text. Mutually exclusive with "route" option.
//            'icon' => 'chart-bar far',      // Name of FontAwesome icon to display. Note that you have to use the "far", "fas" or "fal" modifier behind the icon.
//            'target' => '_blank',           // Target attribute of <a> tag.

//            'badge' => [                    // Optional. Displays a badge behind the text of the menu item.
//                'text' => 'New!',           // Text to display in badge.
//                'context' => 'danger',      // Coloring of the badge, uses CoreUI/Bootstrap context: primary, danger, warning, etc. Default is 'primary'.
//                'pill' => true              // Whether badge should have rounded corners. Defaults to false;
//            ]
//        ],
//        'First section',                    // Section header
//        [
//            'text' => 'Users',
//            'route' => 'admin.users',       // The route behind the text. Mutually exclusive with "url" option.
//            'icon' => 'users',
//            'fa-family' => 'fas'            // Change the FontAwesome family: fas, far, fab, etc. Default is 'fas'
//        ],
//        'Admin only',
//        [
//            'can' => 'edit-settings',       // Use Laravel's Gate functionality via the 'can' keyword to show menu items according to your Gate. Note that you need to uncomment the GateFilter in the Filters array below!
//            'text' => 'Settings',
//            'icon' => 'cog',
//            'submenu' => [
//                [
//                    'text' => 'Level one',
//                    'icon' => 'bell',       // Tip: always set icons. It's more accessible and user friendly.
//                    'url' => 'admin/settings/level-one'
//                ],
//                [
//                    'text' => 'Level two',
//                    'icon' => 'clock',
//                    'submenu' => [
//                        [
//                            'text' => 'Add as many as you like',
//                            'url' => '#'
//                        ]
//                    ]
//                ]
//            ]
//        ]
    ],

    /**
     * Filters that parse above menu configuration and add some sparkling things, like .active classes on active
     * menu items and parsing routes and URLs into the correct href attributes.
     */
    'filters' => [
        HzHboIct\LaravelCoreUI\Menu\Filters\HrefFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\ActiveFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\SubmenuFilter::class,
        HzHboIct\LaravelCoreUI\Menu\Filters\ClassesFilter::class,
        // Uncomment below filter if you want to use the 'can' functionality of the menu builder.
        // HzHboIct\LaravelCoreUI\Menu\Filters\GateFilter::class,
    ],
];
