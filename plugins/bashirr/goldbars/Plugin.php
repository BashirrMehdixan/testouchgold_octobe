<?php namespace Bashirr\GoldBars;

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
            'name' => 'GoldBars',
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
            'Bashirr\GoldBars\Components\GoldBarsComponent' => 'goldBarsComponent',
            'Bashirr\GoldBars\Components\GoldsComponent' => 'goldsComponent',
            'Bashirr\GoldBars\Components\GoldBarShowComponent' => 'goldBarShowComponent',
            'Bashirr\GoldBars\Components\GoldShowComponent' => 'goldShowComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bashirr.goldbars.some_permission' => [
                'tab' => 'GoldBars',
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
            'goldbars' => [
                'label' => 'Gold Bar and Gold Coin',
                'icon' => 'icon-leaf',
                'permissions' => ['bashirr.goldbars.*'],
                'order' => 500,
                'sideMenu' => [
                    'goldbars' => [
                        'label' => 'Golds Category',
                        'url' => Backend::url('bashirr/goldbars/goldbars'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['bashirr.goldbars.*'],
                        'order' => 500,
                    ],
                    'golds' => [
                        'label' => 'Golds',
                        'url' => Backend::url('bashirr/goldbars/golds'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['bashirr.goldbars.*'],
                        'order' => 500,
                    ]
                ]
            ],
        ];
    }
}
