<?php namespace Bashirr\GoldBars\Components;

use Bashirr\GoldBars\Models\GoldBar;
use Cms\Classes\ComponentBase;

/**
 * GoldBarsComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GoldBarsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Gold Bars Component Component',
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
        $types = GoldBar::all();
        $this->page['types'] = $types;
        $this->page['typeCount'] = $types->count();
    }
}
