<?php namespace Bashirr\Banner\Components;

use Bashirr\Banner\Models\Banner;
use Cms\Classes\ComponentBase;

/**
 * BannerComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class BannerComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Banner Component Component',
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
        $banners = Banner::all();
        $this->page['banners'] = $banners;
        $this->page['bannerCount'] = $banners->count();
    }
}
