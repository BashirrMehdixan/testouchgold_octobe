<?php namespace Bashirr\About\Components;

use Bashirr\About\Models\Preference;
use Cms\Classes\ComponentBase;

/**
 * PreferencesComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class PreferencesComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Preferences Component Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $preferences = Preference::all();
        $this->page['preferences'] = $preferences;
        $this->page['preferencesCount'] = $preferences->count();
    }
}
