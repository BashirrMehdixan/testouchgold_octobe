<?php namespace Bashirr\Products\Components;

use Bashirr\Products\Models\Product;
use Cms\Classes\ComponentBase;

/**
 * SortComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class SortComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Sort Component Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'sortOrder' => [
                'title' => 'Sort Order',
                'description' => 'Select the order in which products should be sorted',
                'default' => 'trending',
                'type' => 'dropdown',
                'options' => ['trending' => 'Relevance', 'name_asc' => 'Name (A - Z)', 'name_desc' => 'Name (Z - A)', 'price_asc' => 'Price (Low > High)', 'price_desc' => 'Price (High > Low)']
            ]
        ];
    }

    public function onRun()
    {
        $sortOrder = input('sortby', $this->property('sortOrder'));
        $query = Product::query();

        switch ($sortOrder) {
            case 'name_asc':
                $query->orderBy('product_name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('product_name', 'desc');
                break;
            case 'price_asc':
                $query->orderBy('product_price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('product_price', 'desc');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        $products = $query->get();
        $this->page['products'] = $products;
        $this->page['sortOrder'] = $sortOrder;
    }
}
