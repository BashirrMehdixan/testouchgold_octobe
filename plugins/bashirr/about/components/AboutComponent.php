<?php namespace Bashirr\About\Components;

use Bashirr\About\Models\About;
use Cms\Classes\ComponentBase;

/**
 * AboutComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class AboutComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'About Component Component',
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
        $abouts = About::all();
        $this->page['abouts'] = $abouts;
        $this->page['aboutCount'] = $abouts->count();

    }
}
