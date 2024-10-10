<?php namespace Bashirr\ContactForm\Components;

use Cms\Classes\ComponentBase;

/**
 * ContactFormComponent Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ContactFormComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form Component Component',
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

    public function onSend()
    {
        // Get request data
        $data = \Input::only([
            'first_name',
            'phone',
            'email_address',
            'contact_subject',
            'user_msg'
        ]);
        $rules = [
            'first_name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email_address' => 'required|email',
            'contact_subject' => 'required',
            'user_msg' => 'required',
        ];
        $errors = [
            'first_name.required' => 'Enter your name',
            'phone.required' => 'Enter your phone number',
            'email_address.required' => 'Enter your email address',
            'contact_subject.required' => 'Enter your contact subject',
            'user_msg.required' => 'Enter your message',
        ];
        $validator = \Validator::make($data, $rules, $errors);

        if ($validator->fails()) {
            return \Redirect::back()->withErrors($validator);
        }

        // Send email
        $receiver = 'm.bashir@bukhalternative.az';
        \Mail::send('ContactForm::mail.message', $data, function ($message) use ($receiver) {
            $message->to($receiver);
        });

        \Flash::success('Thanks for your message!');
        return \Redirect::refresh();
    }
}
