<?php namespace Bashirr\Products;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Products',
            'description' => 'No description provided yet...',
            'author' => 'Bashirr',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Bashirr\Products\Components\ProductComponent' => 'productComponent',
            'Bashirr\Products\Components\ProductShowComponent' => 'productShowComponent',
            'Bashirr\Products\Components\SortComponent' => 'sortComponent',
            'Bashirr\Products\Components\CollectionsComponent' => 'collectionsComponent',
            'Bashirr\Products\Components\CollectionShowComponent' => 'collectionShowComponent',
            'Bashirr\Products\Components\BrandsComponent' => 'brandsComponent',
            'Bashirr\Products\Components\BrandShowComponent' => 'brandShowComponent',
            'Bashirr\Products\Components\WeddingsComponent' => 'weddingsComponent',
            'Bashirr\Products\Components\WeddingShowComponent' => 'WeddingShowComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bashirr.products.some_permission' => [
                'tab' => 'Products',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'products' => [
                'label' => 'Products',
                'icon' => 'icon-leaf',
                'permissions' => ['bashirr.products.*'],
                'order' => 500,
                'sideMenu' => [
                    'collections' => [
                        'label' => 'Collections',
                        'url' => Backend::url('bashirr/products/collections'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['bashirr.products.*'],
                        'order' => 500,
                    ],
                    'products' => [
                        'label' => 'Products',
                        'url' => Backend::url('bashirr/products/products'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['bashirr.products.*'],
                        'order' => 500,
                    ],
//                    'brands' => [
//                        'label' => 'Brands',
//                        'url' => Backend::url('bashirr/products/brands'),
//                        'icon' => 'icon-leaf',
//                        'permissions' => ['bashirr.products.*'],
//                        'order' => 500,
//                    ],
                    'wedding' => [
                        'label' => 'Wedding Occasions',
                        'url' => Backend::url('bashirr/products/weddings'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['bashirr.products.*'],
                        'order' => 500,
                    ]
                ]
            ],
        ];
    }
}
