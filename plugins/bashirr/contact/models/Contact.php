<?php namespace Bashirr\Contact\Models;

use Model;

/**
 * Contact Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'bashirr_contact_contacts';

    /**
     * @var array rules for validation
     */
    public $rules = [];
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel',
    ];
    public $translatable = [
        'address'
    ];
}
