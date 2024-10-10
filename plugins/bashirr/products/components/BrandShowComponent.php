<?php namespace Bashirr\Products\Components;

use Cms\Classes\ComponentBase;
use Bashirr\Products\Models\Product;
use Bashirr\Products\Models\Brand;

/**
 * BrandShowComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class BrandShowComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Brand Show Component Component',
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
        if (preg_match('/\/brands\/([^\/]+)/', $currentUrl, $matches)) {
            $slug = $matches[1];

            $brand = Brand::where('slug', $slug)->first();
            if (!$brand) {
                return \Response::make($this->controller->run('404'), 404);
            }

            $branded_products = Product::where('product_brand', $brand->id)->get();
            $productCount = $branded_products->count();

            $this->page['brand'] = $brand;
            $this->page['branded_products'] = $branded_products;
            $this->page['brandedProductCount'] = $productCount;
        }
    }
}
