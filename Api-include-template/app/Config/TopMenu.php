<?php

namespace App\Config;

class TopMenu
{
    /**
     * List of top menu items.
     */
    public static function menu(): array
    {
        return [
            'dashboard' => [
                'icon' => 'circle-gauge',
                'title' => 'Dashboard',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => 'panel-bottom-close',
                        'route_name' => 'dashboard-overview-1',
                        'title' => 'Overview 1'
                    ],
                    'dashboard-overview-2' => [
                        'icon' => 'disc-3',
                        'route_name' => 'dashboard-overview-2',
                        'title' => 'Overview 2'
                    ],
                    'dashboard-overview-3' => [
                        'icon' => 'square-activity',
                        'route_name' => 'dashboard-overview-3',
                        'title' => 'Overview 3'
                    ],
                    'dashboard-overview-4' => [
                        'icon' => 'album',
                        'route_name' => 'dashboard-overview-4',
                        'title' => 'Overview 4'
                    ]
                ]
            ],
            'apps' => [
                'icon' => 'square-kanban',
                'title' => 'Apps',
                'sub_menu' => [
                    'users' => [
                        'icon' => 'circle-gauge',
                        'title' => 'Users',
                        'sub_menu' => [
                            'users-layout-1' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'users-layout-1',
                                'title' => 'Layout 1'
                            ],
                            'users-layout-2' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'users-layout-2',
                                'title' => 'Layout 2'
                            ],
                            'users-layout-3' => [
                                'icon' => 'circle-gauge',
                                'route_name' => 'users-layout-3',
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'profile' => [
                        'icon' => 'trello',
                        'title' => 'Profile',
                        'sub_menu' => [
                            'profile-overview-1' => [
                                'icon' => 'zap',
                                'route_name' => 'profile-overview-1',
                                'title' => 'Overview 1'
                            ],
                            'profile-overview-2' => [
                                'icon' => 'zap',
                                'route_name' => 'profile-overview-2',
                                'title' => 'Overview 2'
                            ],
                            'profile-overview-3' => [
                                'icon' => 'zap',
                                'route_name' => 'profile-overview-3',
                                'title' => 'Overview 3'
                            ]
                        ]
                    ],
                    'e-commerce' => [
                        'icon' => 'shopping-bag',
                        'title' => 'E-Commerce',
                        'sub_menu' => [
                            'categories' => [
                                'icon' => 'zap',
                                'route_name' => 'categories',
                                'title' => 'Categories'
                            ],
                            'add-product' => [
                                'icon' => 'zap',
                                'route_name' => 'add-product',
                                'title' => 'Add Product',
                            ],
                            'product-list' => [
                                'icon' => 'zap',
                                'route_name' => 'product-list',
                                'title' => 'Product List'
                            ],
                            'product-grid' => [
                                'icon' => 'zap',
                                'route_name' => 'product-grid',
                                'title' => 'Product Grid'
                            ],
                            'transaction-list' => [
                                'icon' => 'zap',
                                'route_name' => 'transaction-list',
                                'title' => 'Transaction List'
                            ],
                            'transaction-detail' => [
                                'icon' => 'zap',
                                'route_name' => 'transaction-detail',
                                'title' => 'Transaction Detail'
                            ],
                            'seller-list' => [
                                'icon' => 'zap',
                                'route_name' => 'seller-list',
                                'title' => 'Seller List'
                            ],
                            'seller-detail' => [
                                'icon' => 'zap',
                                'route_name' => 'seller-detail',
                                'title' => 'Seller Detail'
                            ],
                            'reviews' => [
                                'icon' => 'zap',
                                'route_name' => 'reviews',
                                'title' => 'Reviews'
                            ],
                        ]
                    ],
                    'inbox' => [
                        'icon' => 'inbox',
                        'route_name' => 'inbox',
                        'title' => 'Inbox'
                    ],
                    'file-manager' => [
                        'icon' => 'folder',
                        'route_name' => 'file-manager',
                        'title' => 'File Manager'
                    ],
                    'point-of-sale' => [
                        'icon' => 'credit-card',
                        'route_name' => 'point-of-sale',
                        'title' => 'Point of Sale'
                    ],
                    'chat' => [
                        'icon' => 'message-square',
                        'route_name' => 'chat',
                        'title' => 'Chat'
                    ],
                    'post' => [
                        'icon' => 'file-text',
                        'route_name' => 'post',
                        'title' => 'Post'
                    ],
                    'calendar' => [
                        'icon' => 'calendar',
                        'route_name' => 'calendar',
                        'title' => 'Calendar'
                    ],
                    'crud' => [
                        'icon' => 'edit',
                        'title' => 'Crud',
                        'sub_menu' => [
                            'crud-data-list' => [
                                'icon' => 'zap',
                                'route_name' => 'crud-data-list',
                                'title' => 'Data List'
                            ],
                            'crud-form' => [
                                'icon' => 'zap',
                                'route_name' => 'crud-form',
                                'title' => 'Form'
                            ]
                        ]
                    ]
                ]
            ],
            'pages' => [
                'icon' => 'layout',
                'title' => 'Pages',
                'sub_menu' => [
                    'wizards' => [
                        'icon' => 'activity',
                        'title' => 'Wizards',
                        'sub_menu' => [
                            'wizard-layout-1' => [
                                'icon' => 'zap',
                                'route_name' => 'wizard-layout-1',
                                'title' => 'Layout 1'
                            ],
                            'wizard-layout-2' => [
                                'icon' => 'zap',
                                'route_name' => 'wizard-layout-2',
                                'title' => 'Layout 2'
                            ],
                            'wizard-layout-3' => [
                                'icon' => 'zap',
                                'route_name' => 'wizard-layout-3',
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'blog' => [
                        'icon' => 'activity',
                        'title' => 'Blog',
                        'sub_menu' => [
                            'blog-layout-1' => [
                                'icon' => 'zap',
                                'route_name' => 'blog-layout-1',
                                'title' => 'Layout 1'
                            ],
                            'blog-layout-2' => [
                                'icon' => 'zap',
                                'route_name' => 'blog-layout-2',
                                'title' => 'Layout 2'
                            ],
                            'blog-layout-3' => [
                                'icon' => 'zap',
                                'route_name' => 'blog-layout-3',
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'pricing' => [
                        'icon' => 'activity',
                        'title' => 'Pricing',
                        'sub_menu' => [
                            'pricing-layout-1' => [
                                'icon' => 'zap',
                                'route_name' => 'pricing-layout-1',
                                'title' => 'Layout 1'
                            ],
                            'pricing-layout-2' => [
                                'icon' => 'zap',
                                'route_name' => 'pricing-layout-2',
                                'title' => 'Layout 2'
                            ]
                        ]
                    ],
                    'invoice' => [
                        'icon' => 'activity',
                        'title' => 'Invoice',
                        'sub_menu' => [
                            'invoice-layout-1' => [
                                'icon' => 'zap',
                                'route_name' => 'invoice-layout-1',
                                'title' => 'Layout 1'
                            ],
                            'invoice-layout-2' => [
                                'icon' => 'zap',
                                'route_name' => 'invoice-layout-2',
                                'title' => 'Layout 2'
                            ]
                        ]
                    ],
                    'faq' => [
                        'icon' => 'activity',
                        'title' => 'FAQ',
                        'sub_menu' => [
                            'faq-layout-1' => [
                                'icon' => 'zap',
                                'route_name' => 'faq-layout-1',
                                'title' => 'Layout 1'
                            ],
                            'faq-layout-2' => [
                                'icon' => 'zap',
                                'route_name' => 'faq-layout-2',
                                'title' => 'Layout 2'
                            ],
                            'faq-layout-3' => [
                                'icon' => 'zap',
                                'route_name' => 'faq-layout-3',
                                'title' => 'Layout 3'
                            ]
                        ]
                    ],
                    'login' => [
                        'icon' => 'activity',
                        'route_name' => 'login',
                        'title' => 'Login'
                    ],
                    'register' => [
                        'icon' => 'activity',
                        'route_name' => 'register',
                        'title' => 'Register'
                    ],
                    'error-page' => [
                        'icon' => 'activity',
                        'route_name' => 'error-page',
                        'title' => 'Error Page'
                    ],
                    'update-profile' => [
                        'icon' => 'activity',
                        'route_name' => 'update-profile',
                        'title' => 'Update profile'
                    ],
                    'change-password' => [
                        'icon' => 'activity',
                        'route_name' => 'change-password',
                        'title' => 'Change Password'
                    ]
                ]
            ],
            'components' => [
                'icon' => 'inbox',
                'title' => 'Components',
                'sub_menu' => [
                    'grid' => [
                        'icon' => 'activity',
                        'title' => 'Grid',
                        'sub_menu' => [
                            'regular-table' => [
                                'icon' => 'zap',
                                'route_name' => 'regular-table',
                                'title' => 'Regular Table'
                            ],
                            'tabulator' => [
                                'icon' => 'zap',
                                'route_name' => 'tabulator',
                                'title' => 'Tabulator'
                            ]
                        ]
                    ],
                    'overlay' => [
                        'icon' => 'activity',
                        'title' => 'Overlay',
                        'sub_menu' => [
                            'dialog' => [
                                'icon' => 'zap',
                                'route_name' => 'dialog',
                                'title' => 'Dialog'
                            ],
                            'sheet' => [
                                'icon' => 'zap',
                                'route_name' => 'sheet',
                                'title' => 'Sheet'
                            ],
                            'toast' => [
                                'icon' => 'zap',
                                'route_name' => 'toast',
                                'title' => 'Toast'
                            ],
                        ]
                    ],
                    'tabs' => [
                        'icon' => 'activity',
                        'route_name' => 'tabs',
                        'title' => 'Tabs'
                    ],
                    'accordion' => [
                        'icon' => 'activity',
                        'route_name' => 'accordion',
                        'title' => 'Accordion'
                    ],
                    'button' => [
                        'icon' => 'activity',
                        'route_name' => 'button',
                        'title' => 'Button'
                    ],
                    'alert' => [
                        'icon' => 'activity',
                        'route_name' => 'alert',
                        'title' => 'Alert'
                    ],
                    'progress' => [
                        'icon' => 'activity',
                        'route_name' => 'progress',
                        'title' => 'Progress Bar'
                    ],
                    'tooltip' => [
                        'icon' => 'activity',
                        'route_name' => 'tooltip',
                        'title' => 'Tooltip'
                    ],
                    'dropdown-menu' => [
                        'icon' => 'activity',
                        'route_name' => 'dropdown-menu',
                        'title' => 'Dropdown Menu'
                    ],
                    'typography' => [
                        'icon' => 'activity',
                        'route_name' => 'typography',
                        'title' => 'Typography'
                    ],
                    'icon' => [
                        'icon' => 'activity',
                        'route_name' => 'icon',
                        'title' => 'Icon'
                    ]
                ]
            ],
            'forms' => [
                'icon' => 'sidebar',
                'title' => 'Forms',
                'sub_menu' => [
                    'regular-form' => [
                        'icon' => 'activity',
                        'route_name' => 'regular-form',
                        'title' => 'Regular Form'
                    ],
                    'easepick' => [
                        'icon' => 'activity',
                        'route_name' => 'easepick',
                        'title' => 'Easepick'
                    ],
                    'tom-select' => [
                        'icon' => 'activity',
                        'route_name' => 'tom-select',
                        'title' => 'Tom Select'
                    ],
                    'dropzone' => [
                        'icon' => 'activity',
                        'route_name' => 'dropzone',
                        'title' => 'Dropzone'
                    ],
                    'wysiwyg-editor' => [
                        'icon' => 'activity',
                        'title' => 'Wysiwyg Editor',
                        'sub_menu' => [
                            'ckeditor-classic' => [
                                'icon' => 'zap',
                                'route_name' => 'ckeditor-classic',
                                'title' => 'CKEditor Classic'
                            ],
                            'ckeditor-inline' => [
                                'icon' => 'zap',
                                'route_name' => 'ckeditor-inline',
                                'title' => 'CKEditor Inline'
                            ],
                            'ckeditor-balloon' => [
                                'icon' => 'zap',
                                'route_name' => 'ckeditor-balloon',
                                'title' => 'CKEditor Balloon'
                            ],
                            'ckeditor-balloon-block' => [
                                'icon' => 'zap',
                                'route_name' => 'ckeditor-balloon-block',
                                'title' => 'CKEditor Balloon Block'
                            ],
                            'ckeditor-document' => [
                                'icon' => 'zap',
                                'route_name' => 'ckeditor-document',
                                'title' => 'CKEditor Document'
                            ],
                        ]
                    ],
                    'form-validation' => [
                        'icon' => 'activity',
                        'route_name' => 'form-validation',
                        'title' => 'Form Validation'
                    ]
                ]
            ],
            'widgets' => [
                'icon' => 'hard-drive',
                'title' => 'Widgets',
                'sub_menu' => [
                    'chart' => [
                        'icon' => 'activity',
                        'route_name' => 'chart',
                        'title' => 'Chart'
                    ],
                    'slider' => [
                        'icon' => 'activity',
                        'route_name' => 'slider',
                        'title' => 'Slider'
                    ],
                    'image-zoom' => [
                        'icon' => 'activity',
                        'route_name' => 'image-zoom',
                        'title' => 'Image Zoom'
                    ]
                ]
            ]
        ];
    }
}
