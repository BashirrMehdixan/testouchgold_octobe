<?php namespace Bashirr\Products\Components;

use Cms\Classes\ComponentBase;
use Bashirr\Products\Models\Product;

/**
 * ProductComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ProductComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Product Component Component',
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
        $products = Product::all();
        $this->page['products'] = $products;
        $this->page['productCount'] = $products->count();
    }
}
