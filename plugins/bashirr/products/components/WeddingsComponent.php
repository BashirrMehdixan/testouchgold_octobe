<?php namespace Bashirr\Products\Components;

use Cms\Classes\ComponentBase;
use Bashirr\Products\Models\Wedding;

/**
 * WeddingsComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class WeddingsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Weddings Component Component',
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
        $weddings = Wedding::all();
        $this->page['weddings'] = $weddings;
        $this->page['weddingCount'] = $weddings->count();
    }
}
