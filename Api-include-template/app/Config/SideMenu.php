<?php

namespace App\Config;

class SideMenu
{
    /**
     * List of side menu items.
     */
    public static function menu(): array
    {
        return [
            'GENERAL REPORTS',
            'dashboard' => [
                'icon' => 'circle-gauge',
                'title' => 'Dashboards',
                'badge' => 4,
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => 'panel-bottom-close',
                        'route_name' => 'dashboard-overview-1',
                        'params' => '',
                        'title' => 'Overview 1'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => 'disc-3',
                        'route_name' => 'dashboard-overview-2',
                        'params' => '',
                        'title' => 'Overview 2',
                    ],
                    'dashboard-overview-3' => [
                        'icon' => 'square-activity',
                        'route_name' => 'dashboard-overview-3',
                        'params' => '',
                        'title' => 'Overview 3',
                    ],
                    'dashboard-overview-4' => [
                        'icon' => 'album',
                        'route_name' => 'dashboard-overview-4',
                        'params' => '',
                        'title' => 'Overview 4'
                    ]
                ]
            ],
            'e-commerce' => [
                'icon' => 'square-kanban',
                'title' => 'E-Commerce',
                'badge' => 2,
                'sub_menu' => [
                    'categories' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'categories',
                        'params' => '',
                        'title' => 'Categories'
                    ],
                    'add-product' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'add-product',
                        'params' => '',
                        'title' => 'Add Product',
                    ],
                    'products' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Products',
                        'sub_menu' => [
                            'product-list' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'product-list',
                                'params' => '',
                                'title' => 'Product List'
                            ],
                            'product-grid' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'product-grid',
                                'params' => '',
                                'title' => 'Product Grid'
                            ]
                        ]
                    ],
                    'transactions' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Transactions',
                        'sub_menu' => [
                            'transaction-list' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'transaction-list',
                                'params' => '',
                                'title' => 'Transaction List'
                            ],
                            'transaction-detail' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'transaction-detail',
                                'params' => '',
                                'title' => 'Transaction Detail'
                            ]
                        ]
                    ],
                    'sellers' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Sellers',
                        'sub_menu' => [
                            'seller-list' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'seller-list',
                                'params' => '',
                                'title' => 'Seller List'
                            ],
                            'seller-detail' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'seller-detail',
                                'params' => '',
                                'title' => 'Seller Detail'
                            ]
                        ]
                    ],
                    'reviews' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'reviews',
                        'params' => '',
                        'title' => 'Reviews'
                    ],
                ]
            ],
            'APPS',
            'inbox' => [
                'icon' => 'circle-gauge',
                'route_name' => 'inbox',
                'params' => '',
                'title' => 'Inbox'
            ],
            'file-manager' => [
                'icon' => 'circle-gauge',
                'route_name' => 'file-manager',
                'params' => '',
                'title' => 'File Manager',
                'badge' => 5
            ],
            'point-of-sale' => [
                'icon' => 'circle-gauge',
                'route_name' => 'point-of-sale',
                'params' => '',
                'title' => 'Point of Sale',
            ],
            'chat' => [
                'icon' => 'circle-gauge',
                'route_name' => 'chat',
                'params' => '',
                'title' => 'Chat',
                'badge' => 3
            ],
            'post' => [
                'icon' => 'circle-gauge',
                'route_name' => 'post',
                'params' => '',
                'title' => 'Post'
            ],
            'calendar' => [
                'icon' => 'circle-gauge',
                'route_name' => 'calendar',
                'params' => '',
                'title' => 'Calendar'
            ],
            'PAGES',
            'crud' => [
                'icon' => 'circle-gauge',
                'title' => 'Crud',
                'sub_menu' => [
                    'crud-data-list' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'crud-data-list',
                        'params' => '',
                        'title' => 'Data List'
                    ],
                    'crud-form' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'crud-form',
                        'params' => '',
                        'title' => 'Form'
                    ]
                ]
            ],
            'users' => [
                'icon' => 'circle-gauge',
                'title' => 'Users',
                'sub_menu' => [
                    'users-layout-1' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'users-layout-1',
                        'params' => '',
                        'title' => 'Layout 1'
                    ],
                    'users-layout-2' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'users-layout-2',
                        'params' => '',
                        'title' => 'Layout 2'
                    ],
                    'users-layout-3' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'users-layout-3',
                        'params' => '',
                        'title' => 'Layout 3'
                    ]
                ]
            ],
            'profile' => [
                'icon' => 'circle-gauge',
                'title' => 'Profile',
                'sub_menu' => [
                    'profile-overview-1' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'profile-overview-1',
                        'params' => '',
                        'title' => 'Overview 1'
                    ],
                    'profile-overview-2' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'profile-overview-2',
                        'params' => '',
                        'title' => 'Overview 2'
                    ],
                    'profile-overview-3' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'profile-overview-3',
                        'params' => '',
                        'title' => 'Overview 3'
                    ]
                ]
            ],
            'pages' => [
                'icon' => 'circle-gauge',
                'title' => 'Pages',
                'sub_menu' => [
                    'wizards' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Wizards',
                        'sub_menu' => [
                            'wizard-layout-1' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'wizard-layout-1',
                                'params' => '',
                                'title' => 'Layout 1'
                            ],
                            'wizard-layout-2' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'wizard-layout-2',
                                'params' => '',
                                'title' => 'Layout 2'
                            ],
                            'wizard-layout-3' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'wizard-layout-3',
                                'params' => '',
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'blog' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Blog',
                        'sub_menu' => [
                            'blog-layout-1' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'blog-layout-1',
                                'params' => '',
                                'title' => 'Layout 1'
                            ],
                            'blog-layout-2' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'blog-layout-2',
                                'params' => '',
                                'title' => 'Layout 2'
                            ],
                            'blog-layout-3' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'blog-layout-3',
                                'params' => '',
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'pricing' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Pricing',
                        'sub_menu' => [
                            'pricing-layout-1' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'pricing-layout-1',
                                'params' => '',
                                'title' => 'Layout 1'
                            ],
                            'pricing-layout-2' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'pricing-layout-2',
                                'params' => '',
                                'title' => 'Layout 2'
                            ]
                        ]
                    ],
                    'invoice' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Invoice',
                        'sub_menu' => [
                            'invoice-layout-1' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'invoice-layout-1',
                                'params' => '',
                                'title' => 'Layout 1'
                            ],
                            'invoice-layout-2' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'invoice-layout-2',
                                'params' => '',
                                'title' => 'Layout 2'
                            ]
                        ]
                    ],
                    'faq' => [
                        'icon' => 'circle-gauge',
                        'title' => 'FAQ',
                        'sub_menu' => [
                            'faq-layout-1' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'faq-layout-1',
                                'params' => '',
                                'title' => 'Layout 1'
                            ],
                            'faq-layout-2' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'faq-layout-2',
                                'params' => '',
                                'title' => 'Layout 2'
                            ],
                            'faq-layout-3' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'faq-layout-3',
                                'params' => '',
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'login' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'login',
                        'params' => '',
                        'title' => 'Login'
                    ],
                    'register' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'register',
                        'params' => '',
                        'title' => 'Register'
                    ],
                    'error-page' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'error-page',
                        'params' => '',
                        'title' => 'Error Page'
                    ],
                    'update-profile' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'update-profile',
                        'params' => '',
                        'title' => 'Update profile'
                    ],
                    'change-password' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'change-password',
                        'params' => '',
                        'title' => 'Change Password'
                    ]
                ]
            ],
            'UI COMPONENTS',
            'components' => [
                'icon' => 'circle-gauge',
                'title' => 'Components',
                'sub_menu' => [
                    'grid' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Grid',
                        'sub_menu' => [
                            'regular-table' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'regular-table',
                                'params' => '',
                                'title' => 'Regular Table'
                            ],
                            'tabulator' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'tabulator',
                                'params' => '',
                                'title' => 'Tabulator'
                            ]
                        ]
                    ],
                    'overlay' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Overlay',
                        'sub_menu' => [
                            'dialog' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'dialog',
                                'params' => '',
                                'title' => 'Dialog'
                            ],
                            'sheet' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'sheet',
                                'params' => '',
                                'title' => 'Sheet'
                            ],
                            'toast' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'toast',
                                'params' => '',
                                'title' => 'Toast'
                            ],
                        ]
                    ],
                    'tabs' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'tabs',
                        'params' => '',
                        'title' => 'Tabs'
                    ],
                    'accordion' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'accordion',
                        'params' => '',
                        'title' => 'Accordion'
                    ],
                    'button' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'button',
                        'params' => '',
                        'title' => 'Button'
                    ],
                    'alert' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'alert',
                        'params' => '',
                        'title' => 'Alert'
                    ],
                    'progress' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'progress',
                        'params' => '',
                        'title' => 'Progress'
                    ],
                    'tooltip' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'tooltip',
                        'params' => '',
                        'title' => 'Tooltip'
                    ],
                    'dropdown-menu' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'dropdown-menu',
                        'params' => '',
                        'title' => 'Dropdown Menu'
                    ],
                    'typography' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'typography',
                        'params' => '',
                        'title' => 'Typography'
                    ],
                    'icon' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'icon',
                        'params' => '',
                        'title' => 'Icon'
                    ]
                ]
            ],
            'forms' => [
                'icon' => 'circle-gauge',
                'title' => 'Forms',
                'sub_menu' => [
                    'regular-form' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'regular-form',
                        'params' => '',
                        'title' => 'Regular Form'
                    ],
                    'easepick' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'easepick',
                        'params' => '',
                        'title' => 'Easepick'
                    ],
                    'tom-select' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'tom-select',
                        'params' => '',
                        'title' => 'Tom Select'
                    ],
                    'dropzone' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'dropzone',
                        'params' => '',
                        'title' => 'Dropzone'
                    ],
                    'wysiwyg-editor' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Wysiwyg Editor',
                        'sub_menu' => [
                            'ckeditor-classic' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'ckeditor-classic',
                                'params' => '',
                                'title' => 'CKEditor Classic'
                            ],
                            'ckeditor-inline' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'ckeditor-inline',
                                'params' => '',
                                'title' => 'CKEditor Inline'
                            ],
                            'ckeditor-balloon' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'ckeditor-balloon',
                                'params' => '',
                                'title' => 'CKEditor Balloon'
                            ],
                            'ckeditor-balloon-block' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'ckeditor-balloon-block',
                                'params' => '',
                                'title' => 'CKEditor Balloon Block'
                            ],
                            'ckeditor-document' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'ckeditor-document',
                                'params' => '',
                                'title' => 'CKEditor Document'
                            ],
                        ]
                    ],
                    'form-validation' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'form-validation',
                        'params' => '',
                        'title' => 'Form Validation'
                    ]
                ]
            ],
            'widgets' => [
                'icon' => 'circle-gauge',
                'title' => 'Widgets',
                'sub_menu' => [
                    'chart' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'chart',
                        'params' => '',
                        'title' => 'Chart'
                    ],
                    'slider' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'slider',
                        'params' => '',
                        'title' => 'Slider'
                    ],
                    'image-zoom' => [
                        'icon' => 'circle-gauge',
                        'route_name' => 'image-zoom',
                        'params' => '',
                        'title' => 'Image Zoom'
                    ]
                ]
            ]
        ];
    }
}
