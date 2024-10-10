<?php namespace Bashirr\GoldBars\Components;

use Bashirr\GoldBars\Models\Gold;
use Cms\Classes\ComponentBase;

/**
 * GoldShowComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GoldShowComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Gold Show Component Component',
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
        $currentUrl = \Request::url();
        if (preg_match('/\/golds\/([^\/]+)/', $currentUrl, $matches)) {
            $slug = $matches[1];

            if ($slug) {
                $gold = Gold::where('slug', $slug)->first();
                $item = Gold::where('id', $gold->id)->get();
                $this->page['goldItem'] = $gold;
                $this->page['golds'] = $item;
            }

        }
    }
}
