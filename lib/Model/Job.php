<?php
class Model_Job extends Model_Table {
    public $entity_code = 'job';
    function init(){
        parent::init();

        $this->addField('category');
        $this->addField('name');
        $this->addField('company');
        $this->addField('status');
        $this->addField('next_review')->defaultValue(date('Y-m-d'))->type('date');
        $this->add('filestore/Field_File','file_id')->displaytype('file');
        $this->addField('created_dt_stamp')->type('datetime')->system(true);
    }   
}