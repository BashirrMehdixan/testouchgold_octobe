<?php namespace Bashirr\Products\Models;

use Model;

/**
 * Wedding Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Wedding extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_products_weddings';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'title',
        'wedding_description',
        'slug'
    ];

    public function beforeSave()
    {
        $this->slug = \Str::slug($this->title);
    }

    public
        $attachOne = [
        'wedding_image' => 'System\Models\File'
    ];
}
