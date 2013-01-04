<?php
class page_admin extends Page {
    function init(){
        parent::init();

        $tabs = $this->add('tabs');
        $tabs->addTab('Jobs')->add('CRUD')->setModel('Job');
        $tabs->addTab('Users')->add('CRUD')->setModel('User');
    }
}