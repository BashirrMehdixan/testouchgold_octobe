<?php namespace Bashirr\About\Models;

use Model;

/**
 * About Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class About extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_about_abouts';

    /**
     * @var array rules for validation
     */
    public $rules = [];
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'about_title', 'about_description'
    ];
    public $attachOne = [
        'about_image' => 'System\Models\File'
    ];
}
