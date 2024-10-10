<?php namespace Bashirr\Contact\Components;

use Bashirr\Contact\Models\Contact;
use Cms\Classes\ComponentBase;

/**
 * ContactComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ContactComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Component Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $contacts = Contact::all();
        $this->page['contacts'] = $contacts;
        $this->page['contactCount'] = $contacts->count();
    }
}
