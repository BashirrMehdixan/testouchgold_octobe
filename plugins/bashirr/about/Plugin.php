<?php namespace Bashirr\About;

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
            'name' => 'About',
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
            'Bashirr\About\Components\LogoComponent' => 'logoComponent',
            'Bashirr\About\Components\AboutComponent' => 'aboutComponent',
            'Bashirr\About\Components\PreferencesComponent' => 'preferencesComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bashirr.about.some_permission' => [
                'tab' => 'About',
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
            'about' => [
                'label' => 'About',
                'icon' => 'icon-leaf',
                'permissions' => ['bashirr.about.*'],
                'order' => 500,
                'sideMenu' => [
                    'logo' => [
                        'label' => 'Logo',
                        'url' => Backend::url('bashirr/about/logo'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['bashirr.about.*'],
                        'order' => 500,
                    ],
                    'about' => [
                        'label' => 'About us',
                        'url' => Backend::url('bashirr/about/about'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['bashirr.about.*'],
                        'order' => 500,
                    ],
                    'preferences' => [
                        'label' => 'Why Choose Us',
                        'url' => Backend::url('bashirr/about/preferences'),
                        'icon' => 'icon-leaf',
                        'permissions' => ['bashirr.about.*'],
                        'order' => 500,
                    ],
                ]
            ],
        ];
    }
}
