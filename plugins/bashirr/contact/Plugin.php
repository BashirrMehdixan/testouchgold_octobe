<?php namespace Bashirr\Contact;

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
            'name' => 'Contact',
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
            'Bashirr\Contact\Components\ContactComponent' => 'contactComponent',
            'Bashirr\ContactForm\Components\ContactFormComponent' => 'contactFormComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bashirr.contact.some_permission' => [
                'tab' => 'Contact',
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
            'contact' => [
                'label' => 'Contact',
                'url' => Backend::url('bashirr/contact/contact'),
                'icon' => 'icon-leaf',
                'permissions' => ['bashirr.contact.*'],
                'order' => 500,
            ],
        ];
    }
}
