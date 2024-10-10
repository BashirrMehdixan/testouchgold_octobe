<?php namespace Bashirr\Products\Components;

use Cms\Classes\ComponentBase;
use Bashirr\Products\Models\Collection;

/**
 * CollectionsComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CollectionsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Collections Component Component',
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
        $categories = Collection::all();
        $this->page['categories'] = $categories;
        $this->page['collectionCount'] = $categories->count();
    }
}
