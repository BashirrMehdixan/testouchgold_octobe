<?php namespace Bashirr\GoldBars\Models;

use Model;
use October\Rain\Support\Str;

/**
 * GoldBar Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class GoldBar extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_goldbars_gold_bars';

    /**
     * @var array rules for validation
     */
    public $rules = [];
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];

    public $translatable = [
        'title',
        'description',
        'slug'
    ];

    public $attachOne = [
        'image' => 'System\Models\File',
    ];

    public function beforeSave()
    {
        $this->slug = \Str::slug($this->title);
    }
}
