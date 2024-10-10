<?php namespace Bashirr\About\Models;

use Model;

/**
 * Preference Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Preference extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_about_preferences';

    /**
     * @var array rules for validation
     */
    public $rules = [];
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'title', 'description'
    ];
    public $attachOne = [
        'preference_image' => 'System\Models\File'
    ];
}
