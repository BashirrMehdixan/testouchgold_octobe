<?php namespace Bashirr\About\Models;

use Model;

/**
 * Logo Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Logo extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_about_logos';

    /**
     * @var array rules for validation
     */
    public $rules = [];
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'title', 'short_about'
    ];
    public $attachOne = [
        'logo' => 'System\Models\File'
    ];
}
