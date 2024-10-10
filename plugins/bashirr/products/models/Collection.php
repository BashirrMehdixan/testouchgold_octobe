<?php namespace Bashirr\Products\Models;

use Model;

/**
 * Collection Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Collection extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_products_collections';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $translatable = [
        'category_name',
        'category_description',
        'slug'
    ];

    public $attachOne = [
        'category_image' => 'System\Models\File',
    ];

    public function beforeSave()
    {
        $this->slug = \Str::slug($this->category_name);
    }
}
