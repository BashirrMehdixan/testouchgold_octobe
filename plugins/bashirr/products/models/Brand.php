<?php namespace Bashirr\Products\Models;

use Model;

/**
 * Brand Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Brand extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_products_brands';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'title',
        'slug',
        'description'
    ];

    public function beforeSave()
    {
        $this->slug = \Str::slug($this->title);
    }

    public $attachOne = [
        'logo' => 'System\Models\File',
    ];
}
