<?php namespace Bashirr\Products\Components;

use Cms\Classes\ComponentBase;
use Bashirr\Products\Models\Brand;

/**
 * BrandsComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class BrandsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Brands Component Component',
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
        $brands = Brand::all();
        $this->page['brands'] = $brands;
        $this->page['brandCount'] = $brands->count();
    }
}
