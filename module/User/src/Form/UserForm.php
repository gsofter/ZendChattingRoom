<?php
namespace User\Form;

//use Zend\Form\Form;
use Zend\Form\Form;

class UserForm extends Form
{

    public function __construct()
    {
        parent::__construct('user');

        $this->setAttribute('method', 'POST');

        $this->add([
            'name' => 'id',
            'type' => 'hidden'
        ]);

        $this->add([
            'name' => 'name',
            'type' => 'text',
            'options' => [
                'label' => 'User name'
            ]
        ]);

        $this->add([
            'name' => 'email',
            'type' => 'text',
            'options' => [
                'label' => 'User email'
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
               'value' => 'Save',
               'id'    => 'buttonSave'
            ]
        ]);

    }

}
