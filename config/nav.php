<?php

return [
    'categories' => [
        'name' => 'Categories',
        'icon' => 'fas fa-tags',
        'route' => 'admin.categories.index',
        'children' => [
            [
                'name' => 'All Categories',
                'route' => 'admin.categories.index',
            ],
            [
                'name' => 'Add Category',
                'route' => 'admin.categories.create',
            ],
        ],
    ],
    'products' => [
        'name' => 'Products',
        'icon' => 'fas fa-boxes',
        'route' => 'admin.products.index',
        'children' => [
            [
                'name' => 'All Products',
                'route' => 'admin.products.index',
            ],
            [
                'name' => 'Add Product',
                'route' => 'admin.products.create',
            ],
        ],
    ],
    'Stores' => [
        'name' => 'Stores',
        'icon' => 'fas fa-store',
        'route' => 'admin.stores.index',
        'children' => [
            [
                'name' => 'All Stores',
                'route' => 'admin.stores.index',
            ],
            [
                'name' => 'Add Store',
                'route' => 'admin.stores.create',
            ],
        ],
    ],
    'Users' => [
        'name' => 'Users',
        'icon' => 'fas fa-users',
        'route' => 'admin.users.index',
        'children' => [
            [
                'name' => 'All Users',
                'route' => 'admin.users.index',
            ],
            [
                'name' => 'Add User',
                'route' => 'admin.users.create',
            ],
        ],
    ],
    'Vendors' => [
        'name' => 'Vendors',
        'icon' => 'fas fa-truck',
        'route' => 'admin.vendors.index',
        'children' => [
            [
                'name' => 'All Vendors',
                'route' => 'admin.vendors.index',
            ],
            [
                'name' => 'Add Vendor',
                'route' => 'admin.vendors.create',
            ],
        ],
    ],
    'orders' => [
        'name' => 'Orders',
        'icon' => 'fas fa-shopping-cart',
        'route' => 'admin.orders.index',
        'children' => [
            [
                'name' => 'All Orders',
                'route' => 'admin.orders.index',
            ],
            // [
            //     'name' => 'Pending Orders',
            //     'route' => 'admin.orders.pending',
            // ],
        ],
    ],
    // 'users' => [
    //     'name' => 'Users',
    //     'icon' => 'fas fa-users',
    //     'route' => 'admin.users.index',
    //     'children' => [
    //         [
    //             'name' => 'All Users',
    //             'route' => 'admin.users.index',
    //         ],
    //         [
    //             'name' => 'Add User',
    //             'route' => 'admin.users.create',
    //         ],
    //     ],
    // ],
    // 'settings' => [
    //     'name' => 'Settings',
    //     'icon' => 'fas fa-cogs',
    //     'route' => 'admin.settings.index',
    // ],
];
