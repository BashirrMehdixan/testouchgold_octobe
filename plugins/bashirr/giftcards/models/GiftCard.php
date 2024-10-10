<?php namespace Bashirr\GiftCards\Models;

use Model;

/**
 * GiftCard Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class GiftCard extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_giftcards_gift_cards';

    /**
     * @var array rules for validation
     */
    public $rules = [];
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'gift_name',
        'gift_description',
        'slug'
    ];
    public function beforeSave()
    {
        $this->slug = \Str::slug($this->card_name);
    }
    public $attachOne = [
        'card_image' => 'System\Models\File'
    ];
}
