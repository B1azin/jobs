<?php
class page_jobview extends Page {
    function initMainPage(){
        
        $g = $this->add('Grid');
        $g->setModel('Job',array('category','name','company','next_review','status','file_id'));
            /*
            $g->addFormatter('file_id','template')
            ->setTemplate('<a href="'.$this->api->url('upload').'/<?$file_id?>">File #<file_id?></a>');
            */    
    }
}