<?php
class Model_User extends Model_Table {
    public $entity_code = 'user';
    function init(){
        parent::init();

        $this->addField('name');
        $this->addField('username');
        $this->addField('email');
        $this->addField('password')->mandatory(true);
    }   
}