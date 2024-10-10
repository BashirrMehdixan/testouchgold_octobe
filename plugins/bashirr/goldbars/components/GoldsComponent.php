<?php namespace Bashirr\GoldBars\Components;

use Bashirr\GoldBars\Models\Gold;
use Cms\Classes\ComponentBase;

/**
 * GoldsComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GoldsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Golds Component Component',
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
        $golds = Gold::all();
        $this->page['golds'] = $golds;
        $this->page['goldsCount'] = $golds->count();
    }
}
