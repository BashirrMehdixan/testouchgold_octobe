<?php namespace Bashirr\GoldBars\Components;

use Cms\Classes\ComponentBase;
use Bashirr\GoldBars\Models\GoldBar;
use Bashirr\GoldBars\Models\Gold;

/**
 * GoldBarShowComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GoldBarShowComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Gold Bar Show Component Component',
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
        if (preg_match('/\/goldbar-and-goldcoin\/([^\/]+)/', $currentUrl, $matches)) {
            $slug = $matches[1];

            if ($slug) {
                $goldBar = GoldBar::where('slug', $slug)->first();
                $item = Gold::where('type_id', $goldBar->id)->get();
                $this->page['goldBar'] = $goldBar;
                $this->page['typeItems'] = $item;
                $this->page['typeItemsCount'] = $item->count();

            }
        }
    }
}
