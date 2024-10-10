<?php namespace Bashirr\Products\Components;

use Cms\Classes\ComponentBase;
use Bashirr\Products\Models\Product;
use Bashirr\Products\Models\Collection;

/**
 * CollectionShowComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CollectionShowComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Collection Show Component Component',
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
        if (preg_match('/\/collections\/([^\/]+)/', $currentUrl, $matches)) {
            $slug = $matches[1];

            $collection = Collection::where('slug', $slug)->first();
            if (!$collection) {
                return \Response::make($this->controller->run('404'), 404);
            }

            $selected_products = Product::where('product_category', $collection->id)->get();
            $productCount = $selected_products->count();

            $this->page['category'] = $collection;
            $this->page['selected_products'] = $selected_products;
            $this->page['productCount'] = $productCount;
        } else if (preg_match('/\/kollektsiya\/([^\/]+)/', $currentUrl, $matches)) {
            $slug = $matches[1];

            $collection = Collection::where('slug', $slug)->first();
            if (!$collection) {
                return \Response::make($this->controller->run('404'), 404);
            }

            $selected_products = Product::where('id', $collection->id)->get();
            $productCount = $selected_products->count();

            $this->page['category'] = $collection;
            $this->page['selected_products'] = $selected_products;
            $this->page['selectedProductCount'] = $productCount;
        }
    }
}
