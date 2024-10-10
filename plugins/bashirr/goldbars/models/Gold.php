<?php namespace Bashirr\GoldBars\Models;

use Model;

/**
 * Gold Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Gold extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_goldbars_gold';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $belongsTo = [
        'titles' => 'Bashirr\GoldBars\Models\GoldBar'
    ];

    public function getTypeOptions()
    {
        $bars = GoldBar::all();
        return $bars->pluck('title', 'id');
    }

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        'title',
        'description',
        'slug'
    ];

    public $attachOne = [
        'image' => 'System\Models\File',
        'hover_image' => 'System\Models\File'
    ];

    public $attachMany = [
        'slide_images' => 'System\Models\File'
    ];

    public function beforeSave()
    {
        $this->slug = \Str::slug($this->title);
    }
}
