<?php namespace Bashirr\Products\Components;

use Cms\Classes\ComponentBase;
use Bashirr\Products\Models\Product;
/**
 * ProductShowComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ProductShowComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Product Show Component Component',
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

        if (preg_match('/\/products\/([^\/]+)/', $currentUrl, $matches)) {
            $productSlug = $matches[1];
            $product = Product::where('slug', $productSlug)->first();
            if (!$product) {
                return \Response::make($this->controller->run('404'), 404);
            }

            $this->page['product'] = $product;
        } else if (preg_match('/\/produkty\/([^\/]+)/', $currentUrl, $matches)) {
            $productSlug = $matches[1];
            $product = Product::where('slug', $productSlug)->first();
            if (!$product) {
                return \Response::make($this->controller->run('404'), 404);
            }

            $this->page['product'] = $product;
        }
    }
}
