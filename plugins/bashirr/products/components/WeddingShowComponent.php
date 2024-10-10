<?php namespace Bashirr\Products\Components;

use Cms\Classes\ComponentBase;
use Bashirr\Products\Models\Product;
use Bashirr\Products\Models\Wedding;

/**
 * WeddingShowComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class WeddingShowComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Wedding Show Component Component',
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
        if (preg_match('/\/wedding-occasions\/([^\/]+)/', $currentUrl, $matches)) {
            $slug = $matches[1];

            $wedding = Wedding::where('slug', $slug)->first();
            if (!$wedding) {
                return \Response::make($this->controller->run('404'), 404);
            }
            $wedding_products = Product::where('wedding_id', $wedding->id)->get();
            $productCount = $wedding_products->count();

            $this->page['wedding'] = $wedding;
            $this->page['wedding_products'] = $wedding_products;
            $this->page['weddingProductCount'] = $productCount;
        } else if (preg_match('/\/kollektsiya\/([^\/]+)/', $currentUrl, $matches)) {
            $slug = $matches[1];

            $wedding = Wedding::where('slug', $slug)->first();
            if (!$wedding) {
                return \Response::make($this->controller->run('404'), 404);
            }
            $wedding_products = Product::where('wedding_id', $wedding->id)->get();
            $productCount = $wedding_products->count();

            $this->page['wedding'] = $wedding;
            $this->page['wedding_products'] = $wedding_products;
            $this->page['productCount'] = $productCount;
        }
    }
}
