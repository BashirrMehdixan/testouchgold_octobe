<?php namespace Bashirr\GiftCards\Components;

use Bashirr\GiftCards\Models\GiftCard;
use Bashirr\Products\Models\Product;
use Cms\Classes\ComponentBase;

/**
 * GiftCardShowComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GiftCardShowComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Gift Card Show Component Component',
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

        if (preg_match('/\/gift-cards\/([^\/]+)/', $currentUrl, $matches)) {
            $slug = $matches[1];
            $giftItem = GiftCard::where('slug', $slug)->first();
            if (!$giftItem) {
                return \Response::make($this->controller->run('404'), 404);
            }

            $this->page['giftItem'] = $giftItem;
        }
    }
}
