<?php namespace Bashirr\GiftCards;

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
            'name' => 'GiftCards',
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
            'Bashirr\GiftCards\Components\GiftCardsComponent' => 'giftCardsComponent',
            'Bashirr\GiftCards\Components\GiftCardShowComponent' => 'giftCardShowComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bashirr.giftcards.some_permission' => [
                'tab' => 'GiftCards',
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
            'giftcards' => [
                'label' => 'GiftCards',
                'url' => Backend::url('bashirr/giftcards/giftcards'),
                'icon' => 'icon-leaf',
                'permissions' => ['bashirr.giftcards.*'],
                'order' => 500,
            ],
        ];
    }
}
