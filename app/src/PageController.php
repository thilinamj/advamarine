<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\Forms\EmailField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\Form;
    use SilverStripe\Forms\FormAction;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TextField;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = ['Form'];

        protected function init()
        {
            parent::init();

        }

        public function Form()
        {
            $fields = new FieldList(
                new TextField('Name'),
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
