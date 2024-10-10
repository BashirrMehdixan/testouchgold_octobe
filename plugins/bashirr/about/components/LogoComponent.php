<?php namespace Bashirr\About\Components;

use Bashirr\About\Models\Logo;
use Cms\Classes\ComponentBase;

/**
 * LogoComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class LogoComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Logo Component Component',
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
        $logos = Logo::all();
        $this->page['logos'] = $logos;
        $this->page['logoCount'] = $logos->count();
    }
}
