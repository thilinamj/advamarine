<?php
namespace {
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\FormAction;
    use SilverStripe\Forms\Form;
    use SilverStripe\Forms\EmailField;

    class FormController extends PageController
    {
        private static $allowed_actions = ['Form'];

        public function Form()
        {
            $fields = new FieldList(
                new TextField('Name', '', 'Name'),
                new EmailField('Email'),
                new TextField('Phone Number'),
                new TextareaField('Message')
            );
            $actions = new FieldList(
                new FormAction('submit', 'Submit')
            );
            return new Form($this, 'Form', $fields, $actions);
        }
    }
}