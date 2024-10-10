<?php namespace Bashirr\Banner\Models;

use Model;

/**
 * Banner Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Banner extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_banner_banners';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'banner_title', 'banner_description'
    ];
    public $attachOne = [
        'banner_image' => 'System\Models\File',
    ];
}
