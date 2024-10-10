<?php namespace Bashirr\Products\Models;

use Model;
use Bashirr\Products\Models\Brand;
use Bashirr\Products\Models\Collection;
use Bashirr\Products\Models\Wedding;

/**
 * Product Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_products_products';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public function getCollectionOptions()
    {
        $collections = Collection::all();
        return $collections->pluck('category_name', 'id');
    }

    public function getBrandsOptions()
    {
        $brands = Brand::all();
        $options = [];

        $options[''] = "--- None ---";

        foreach ($brands as $brand) {
            $options[$brand->id] = $brand->title;
        }

        return $options;
    }

    public function getWeddingOptions()
    {
        $weddings = Wedding::all();
        return $weddings->pluck('title', 'id');
    }

    public $belongsTo = [
        'collection' => 'Bashirr\Products\Models\Collection',
        'brand' => 'Bashirr\Products\Models\Brand',
        'wedding' => 'Bashirr\Products\Models\Wedding',
    ];

    public function beforeSave()
    {
        $this->slug = \Str::slug($this->product_name);
    }

    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'product_name',
        'product_category',
        'product_description',
        'slug'
    ];

    public $attachOne = [
        'product_image' => 'System\Models\File',
        'hover_image' => 'System\Models\File',
    ];

    public $attachMany = [
        'slide_images' => 'System\Models\File',
    ];

    public function afterSave()
    {
        if ($this->collection) {
            $collection = Collection::find($this->collection_id);
            if ($collection) {
                $this->category_name = $collection->category_name;
            }
        }
    }
}
