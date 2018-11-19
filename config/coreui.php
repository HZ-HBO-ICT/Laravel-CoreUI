<?php

return [

    /*
     * Application title to display in <title> tag
     */
    'title' => 'CoreUI Laravel Theme by HZ-HBO-ICT',

    /*
     * Text to put in the top-left of the menu bar
     * NOTE: This is a non-escaped string, so you can put HTML in here
     */
    'logo' => 'Core<strong>UI</strong>',

    /*
     * Menu builder
     */
    'menu' => [
        [
            'text' => 'Dashboard',          // The text to be displayed inside the menu.
            'url' => 'admin/dashboard',     // The URL behind the text. Mutually exclusive with "route" option.
            'icon' => 'chart-bar',          // Name of FontAwesome icon to display.
            'target' => '_blank',           // Target attribute of <a> tag.
        ],
        'First section',                    // Section header
        [
            'text' => 'Users',
//            'route' => 'admin.users',       // The route behind the text. Mutually exclusive with "url" option.
            'icon' => 'users'
        ],
        'Admin only',
        [
            'text' => 'Settings',
            'icon' => 'cog',
            'submenu' => [
                [
                    'text' => 'Level one',
                    'url' => 'admin/settings/level-one'
                ],
                [
                    'text' => 'Level two',
                    'submenu' => [
                        [
                            'text' => 'Add as many as you like',
                            'url' => '#'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
