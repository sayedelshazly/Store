<?php

return [

    [
        'icon' => 'nav-icon fas fa-tachometer-alt',
        'route' => 'dashboard.dashboard',
        'title' => 'Dashboard',
        'active' => 'dashboard.dashboard',

    ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'dashboard.categories.index',
        'title' => 'Categories',
        'badge' => 'New',
        'active' => 'dashboard.dashboard',

    ],
    [
        'icon' => 'far fa-circle nav-icon',
        'route' => 'dashboard.categories.create',
        'title' => 'Create Categories'
    ],
];