<?php namespace Bashirr\GiftCards\Components;

use Cms\Classes\ComponentBase;
use Bashirr\GiftCards\Models\GiftCard;

/**
 * GiftCardsComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class GiftCardsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Gift Cards Component Component',
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
        $gifts = GiftCard::all();
        $this->page['gifts'] = $gifts;
        $this->page['giftCount'] = $gifts->count();
    }
}
